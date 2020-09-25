      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}<br>
                    @if(Auth::user()->role=="1")
                      Administrator
                    @elseif(Auth::user()->role=="2")
                      Sekum
                    @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Surat Masuk
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('suratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('tsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Surat Masuk</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-reply"></i>
              <p>
                Surat Keluar
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('suratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Surat Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('tsuratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tambah Surat Keluar</p>
                </a>
              </li>
            </ul>
        </li>
          <!--<li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-pen"></i>
              <p>
                Konsep Surat
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-thumbs-up"></i>
              <p>
                Disposisi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('dismasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disposisi Masuk</p>
                </a>
              </li>
              </li>
            </ul>
        </li>
        
        <!--
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plane"></i>
              <p>
                Expedisi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('expedisi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>expedisi</p>
                </a>
              </li>
            </ul>
        </li>
        -->

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('rsuratmasuk')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Surat Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('rsuratkeluar')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Surat Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('rexpedisi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Surat Expedisi</p>
                </a>
              </li>
            </ul>
        </li>
          <li class="nav-header">Super User</li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Sistem
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('pengguna')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Daftar Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('bidang')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bidang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('subbidang')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sub Bidang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('backup')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salinan Pangkalan Data</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->