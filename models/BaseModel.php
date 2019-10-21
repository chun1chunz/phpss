<?php
class BaseModel
{

    function __construct(){
        $this->connect = new PDO("mysql:host=127.0.0.1;dbname=web;charset=utf8",
                                    "root", "");
    }



    public static function count(){
        $model = new static();
        $model->queryBuilder = "select count(*) as total from " . $model->table;
        $result = $model->get();
        if(count($result) > 0){
            return $result[0]->total;
        }
        return null;
    }


    public static function where($col, $op = '=', $val){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table 
                                    . " where $col $op $val";
        return $model;
    }
        public static function where2($col, $val){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table 
                                    . " where $col = '$val'";
        $result = $model->get();
        if(count($result) > 0){
            return $result[0];
        }
        return null;
    }
    public static function find($val){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table 
                                    . " where id = '$val'";
        $result = $model->get();
        if(count($result) > 0){
            return $result[0];
        }
        return null;
    }

    public static function all(){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table;
        return $model->get();
    }
    public static function limit($start,$limit){
        $model = new static();
        $model->queryBuilder = "select * from " . $model->table
                                    . " limit $start,$limit";
        return $model->get();
    }

    public function get(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
    }


    public static function delete($id)
    {
        $model = new static();
        $sqlQuery = "delete from ". $model->table 
                    . " where id = $id";
        $stmt = $model->connect->prepare($sqlQuery);
        $stmt->execute();
        return true;
    }
    public function exeQuery(){
        $stmt = $this->connect->prepare($this->queryBuilder);
        $stmt->execute();
        return true;
    }
}

?>