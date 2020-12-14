<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/bootstrap.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="image">
          <img src="{{ asset('icon/sharp_account_circle_black_18dp.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <ul class="nav nav-pills">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary">
      <!-- Brand Logo -->
      <a href="/dashboard" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size:25px">TEST CPNS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <nav class="mt-4">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_dashboard_black_18dp.png') }}">
                    Dashboard
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_topic_black_18dp.png') }}">
                    Materi
                  </div>
                </p>
              </a>
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/materitiu" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Intelegensi Umum</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/materitwk" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Wawasan Kebangsaan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="/materitkp" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Karakteristik Pribadi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_note_black_18dp.png') }}">
                    Tips, Trick dan Informasi
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_question_answer_black_18dp.png') }}">
                    Pembahasan Soal
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/latihansoal" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/sharp_create_black_18dp.png') }}">
                    Latihan Soal
                  </div>
                </p>
              </a>
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Intelegensi Umum</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Wawasan Kebangsaan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Karakteristik Pribadi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/hasillatihan" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_grading_black_18dp.png') }}">
                    Hasil Latihan
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="tryout" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/sharp_create_black_18dp.png') }}">
                    Try Out
                  </div>
                </p>
              </a>
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Intelegensi Umum</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Wawasan Kebangsaan</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Test Karakteristik Pribadi</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="/hasiltryout" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_grading_black_18dp.png') }}">
                    Hasil Try Out
                  </div>
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
    
    @yield('container')
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy; 2020-2021 TEST CPNS TEAM.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  @yield('chart')
</body>

</html>