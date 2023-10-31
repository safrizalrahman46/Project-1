<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('AdminLTE-master/dist/img/GD') }}.png" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div data-aos="flip-left">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('AdminLTE-master/dist/img/profil') }}.jpg" class="img-circle elevation-2" alt="User Image" >
        </div>
        <div class="info">
          <a href="#" class="d-block">Safrizal Rahman</a>
        </div>
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

          <li class="nav-item ">
            <a href="{{ url('/dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard Mahasiswa

              </p>
            </a>

          </li>

          <li class="nav-item">
            <a href="{{ url('/mahasiswa/create') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Form Mahasiswa

              </p>
            </a>

          </li>
          <li class="nav-item">
            <a href="{{ url('/mahasiswa') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>

              <p>
                Data Mahasiswa

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/mahasiswa/matkul') }}" class="nav-link">
              <i class="nav-icon ion ion-stats-bars"></i>
              <p>
                Data Nilai Matkul

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/mahasiswa/dosen') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data Dosen

              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ url('/logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out

              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
