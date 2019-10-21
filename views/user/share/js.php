    <script src="<?php $baseUrl ?>public/js/jquery-3.2.1.min.js">
    </script>
    <script src="<?php $baseUrl ?>public/js/popper.min.js"></script>
    <script src="<?php $baseUrl ?>public/js/bootstrap.min.js"></script>
    <script src="<?php $baseUrl ?>public/js/owl.carousel.min.js"></script>
    <script src="<?php $baseUrl ?>public/js/jquery.waypoints.min.js"></script>
    <script src="<?php $baseUrl ?>public/js/aos.js"></script>

    <script src="<?php $baseUrl ?>public/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php $baseUrl ?>public/js/magnific-popup-options.js"></script>
    
    <script>
        function addCart(id){
            var url = `addCart?id=${id}`;
            window.location.href = url;
        }
        function updatecart(key){
            $number = $("#number_"+key).val();
            var url = `update?key=${key}&number=${$number}`;
            window.location.href = url;
        }
        </script>
         <script>
        var pagination = document.getElementById("pagination");
        function agination(){
            first = 'Trang đầu',
            last= 'Trang cuối',
            next= '>>',
            prev= '<<',
            totalPages= <?= $totalPage?>,
            alert(totalPages);
            visiblePages= 5,
            initiateStartPageClick= false,
            startPage= <?= $pageNumber?>,
            onPageClick= function (event, page) {
            var url = '<?= $baseUrl?>history';
            url += "?page=" + page;
                // console.log(url);
                window.location.href = url;
                }
        }
        
    </script>
    <script src="<?php $baseUrl ?>public/js/main.js"></script>
    