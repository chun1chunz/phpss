<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div style="background: #1a2226 !important; height: 50px" class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
        </div>
      </div>
            <!-- search form (Optional) -->
      <!------------------------------

      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      ----------------------------------->
      <!-- /.search form -->
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu tree" data-widget="tree">
        <li><a href="<?= $baseUrl . "admin"?>"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
<!--------------------------------------------------------------------->
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Sản phẩm</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= $baseUrl ?>admin/product">Danh mục</a></li>
            <li><a href="<?= $baseUrl ?>admin/product-add">Thêm sản phẩm</a></li>
          </ul>
        </li>
<!--------------------------------------------------------------------->
<!--------------------------------------------------------------------->

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Tài khoản</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= $baseUrl ?>admin/user">Danh mục</a></li>
            <li><a href="<?= $baseUrl ?>admin/user-add">Thêm tài khoản</a></li>
          </ul>
        </li>
<!--------------------------------------------------------------------->

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Món đã đặt</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        </li>
<!--------------------------------------------------------------------->

       
<!--------------------------------------------------------------------->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>