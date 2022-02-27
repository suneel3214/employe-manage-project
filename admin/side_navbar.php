
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-image: linear-gradient(to right,#3a55da,#d0471e);">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="border-bottom: 1px solid #ecf0f3;">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-bold" style="font-size:13px; color: #fff;">Employe Management System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="border-bottom:1px solid #fff;">
        <div class="image">
          <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Employe
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="add_employe.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Employe</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tasks"></i>
              <p>
                Task 
                <i class="right fas fa-angle-left"></i>               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="task.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send-Task</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="task_display.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View-Task</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employe_reply_task.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employe-Reply-Task</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-close">
            <a href="#" class="nav-link">
              <i class="fas fa-calendar-week nav-icon"></i>
              <p>
                Leave
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="assign_leave.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Assign-Leave</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="assign_leave_display.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave-Display</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="employ_apply_leave.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employe-apply-leave</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout                
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>