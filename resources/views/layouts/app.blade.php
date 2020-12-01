<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Laravue</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('icon/sharp_account_circle_black_18dp.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>
    </nav>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="font-size:25px">TEST CPNS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_dashboard_white_18dp.png') }}">
                    Dashboard
                  </div>
                </p>
              </a>
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <!--  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul> -->
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/baseline_topic_white_18dp.png') }}">
                    Materi
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/sharp_note_white_18dp.png') }}">
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
                    <img src="{{ asset('icon/baseline_question_answer_white_18dp.png') }}">
                    Pembahasan Soal
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/sharp_grading_white_18dp.png') }}">
                    Latihan Soal
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/sharp_grading_white_18dp.png') }}">
                    Hasil Latihan
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/sharp_assignment_white_18dp.png') }}">
                    Try Out
                  </div>
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  <div class="image">
                    <img src="{{ asset('icon/sharp_grading_white_18dp.png') }}">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img src="{{ asset('icon/sharp_book_black_18dp.png') }}">
                  <div class="text-right">
                    <h6 class="card-text" style="font-size: 30px; font-weight:bolder">100</h6>
                    <p class="card-text">Materi</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img src="{{ asset('icon/sharp_topic_black_18dp.png') }}">
                  <div class="text-right">
                    <h6 class="card-text" style="font-size: 30px; font-weight:bolder">250</h6>
                    <p class="card-text">Pembahasan Soal</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img src="{{ asset('icon/sharp_create_black_18dp.png') }}">
                  <div class="text-right">
                    <h6 class="card-text" style="font-size: 30px; font-weight:bolder">30</h6>
                    <p class="card-text">Latihan & Tryout</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3">
              <div class="card">
                <div class="card-body">
                  <img src="{{ asset('icon/sharp_sticky_note_2_black_18dp.png') }}">
                  <div class="text-right">
                    <h6 class="card-text" style="font-size: 30px; font-weight:bolder">4</h6>
                    <p class="card-text">Catatan Kebutuhan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="alert alert-danger" role="alert">
            Ada Latihan & Tryout yang belum dikerjakan
          </div>


          <div class="row">
            <div class="col-lg-6">
              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">TKP - TKP 21</h5>
                  <div class="text-right">
                    <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                  </div>
                  <p class="card-text">
                    20 Menit - 15 Soal
                  </p>

                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">TWK - TWK 19</h5>
                  <div class="text-right">
                    <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                  </div>
                  <p class="card-text">
                    20 Mnit - 15 Soal
                  </p>
                </div>
              </div>
            </div>
          </div>



          <div class="row">
            <div class="col-lg-6">
              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">TIU - TIU 20</h5>
                  <div class="text-right">
                    <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                  </div>
                  <p class="card-text">
                    20 Menit - 15 Soal
                  </p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title">TWK -TWK 20</h5>
                  <div class="text-right">
                    <button type="button" class="btn btn-outline-primary">KERJAKAN</button>
                  </div>
                  <p class="card-text">
                    20 Menit - 15 Soal
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>