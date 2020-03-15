<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NextPromise-FAQ</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="./../index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <span class="brand-text font-weight-light"><b>User Panel</b></span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Username</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open">
              <a href="./index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Diet Chart
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./weekly.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Weekly</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="./monthly.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Monthly</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="./dosdonts.php" class="nav-link">
                <i class="fa fa-dot-circle nav-icon" aria-hidden="true"></i>
                <p> Do's & Dont's</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./faq.php" class="nav-link">
                <i class="fa fa-question-circle nav-icon" aria-hidden="true"></i>
                <p> FAQs</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./appointment.php" class="nav-link">
                <i class="fa fa-id-card nav-icon" aria-hidden="true"></i>
                <p> Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./exercise.php" class="nav-link">
                <i class="fa fa-female nav-icon" aria-hidden="true"></i>
                <p> Exercises</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="./chatbox.php" class="nav-link">
                <i class="fa fa-comments nav-icon" aria-hidden="true"></i>
                <p> Chatbox</p>
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
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">FAQs</h1>
            </div>
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row p-5">
            <!-- col -->
            <div class="col-lg-8 col-12">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        What is Pregnancy?
                      </button>
                    </h5>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                      Pregnancy is period from conception to birth. After the egg is fertilized by a sperm and then
                      implanted in the lining of the uterus, it develops into the placenta and embryo, and later into a
                      fetus. Pregnancy usually lasts 40 weeks, beginning from the first day of the woman's last
                      menstrual period, and is divided into three trimesters, each lasting three months.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">
                        What are the Stages of pregnancy?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      Pregnancy is generally divided into three periods or trimesters, each of about three month’s
                      durations. Obstetricians have defined each trimester as lasting for 12 weeks, resulting in the
                      average duration of pregnancy is 40 week depending upon the women’s physiology.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">
                        What is Prenatal care or Antenatal care?
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      Prenatal care (also known as antenatal care) refers to the regular medical and nursing care
                      recommended for women during pregnancy. Prenatal care is a form of preventative care with the aim
                      of providing regular health check-ups that allow doctors or midwives to treat and prevent
                      potential health problems throughout the course of the pregnancy while promoting healthy
                      lifestyles that will benefit both mother and child. Prenatal care includes:
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfour">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapsefour"
                        aria-expanded="false" aria-controls="collapsefour">
                        Counseling
                      </button>
                    </h5>
                  </div>

                  <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                    <div class="card-body">
                      Pregnancy is period from conception to birth. After the egg is fertilized by a sperm and then
                      implanted in the lining of the uterus, it develops into the placenta and embryo, and later into a
                      fetus. Pregnancy usually lasts 40 weeks, beginning from the first day of the woman's last
                      menstrual period, and is divided into three trimesters, each lasting three months.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingfive">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapsefive"
                        aria-expanded="false" aria-controls="collapsefive">
                        Advantages of institutional deliveries
                      </button>
                    </h5>
                  </div>

                  <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                    <div class="card-body">
                      Pregnancy is period from conception to birth. After the egg is fertilized by a sperm and then
                      implanted in the lining of the uterus, it develops into the placenta and embryo, and later into a
                      fetus. Pregnancy usually lasts 40 weeks, beginning from the first day of the woman's last
                      menstrual period, and is divided into three trimesters, each lasting three months.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingsix">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapsesix"
                        aria-expanded="false" aria-controls="collapsesix">
                        Why is abdominal pain during pregnancy?
                      </button>
                    </h5>
                  </div>

                  <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                    <div class="card-body">
                      Pregnancy is period from conception to birth. After the egg is fertilized by a sperm and then
                      implanted in the lining of the uterus, it develops into the placenta and embryo, and later into a
                      fetus. Pregnancy usually lasts 40 weeks, beginning from the first day of the woman's last
                      menstrual period, and is divided into three trimesters, each lasting three months.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingseven">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseseven"
                        aria-expanded="false" aria-controls="collapseseven">
                        Tips for safe and healthy physical activity </button>
                    </h5>
                  </div>

                  <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
                    <div class="card-body">
                      Pregnancy is period from conception to birth. After the egg is fertilized by a sperm and then
                      implanted in the lining of the uterus, it develops into the placenta and embryo, and later into a
                      fetus. Pregnancy usually lasts 40 weeks, beginning from the first day of the woman's last
                      menstrual period, and is divided into three trimesters, each lasting three months.
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-12">
              <div class="mb-80">
                <img src="./dist/img/p-lady.png" alt="" width="100%" height="100%">
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="/index.php">NextPromise</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>