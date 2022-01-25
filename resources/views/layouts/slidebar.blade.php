<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="{{url('/')}}" class="nav-link" id="dashboard_menu">
                <i class="fas fa-rss"></i>
              <p>
               ផ្ទាំងគ្រប់គ្រង
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('category.index')}}" class="nav-link" id="category_menu">
                <i class="fas fa-rss"></i>
              <p>
               ប្រភេទផលិតផល
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('product.index')}}" class="nav-link" id="product_menu">
                <i class="fas fa-rss"></i>
              <p>
              ទំនិញ
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('stock_in.index')}}" class="nav-link" id="stock_in_menu">
                <i class="fas fa-warehouse"></i>
              <p>
               ស្តុកចូល
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('user.index')}}" class="nav-link" id="">
                <i class="fas fa-warehouse"></i>
              <p>
               ស្តុកចេញ
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('user.index')}}" class="nav-link" id="">
                <i class="fas fa-file"></i>
              <p>
               ខូច និង ហួសកំណត់
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('user.index')}}" class="nav-link" id="">
                <i class="fas fa-file"></i>
              <p>
               របាយការណ៍
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{route('role.index')}}" class="nav-link" id="role_menu">
             <i class="fa fa-user-lock"></i>
              <p>
                តូនាទី
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('user.index')}}" class="nav-link" id="user_menu">
             <i class="fa fa-users"></i>
              <p>
                អ្នកប្រើប្រាស់
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{route('user.index')}}" class="nav-link" id="user_menu">
                <i class="fas fa-sign-out-alt"></i>
              <p>
                ចាកចេញ
              </p>
            </a>
          </li>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
