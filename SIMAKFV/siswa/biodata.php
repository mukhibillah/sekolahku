<?php
  session_start();
  include 'connect.php';
  $nis = $_SESSION['nis'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMA Fons Vitae 1 Matsudirini | Jakarta Timur</title>
  <link rel="shortcut icon" type="image/png" href="../dist/img/logo-lg.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.css">
  <link rel="stylesheet" href="../dist/css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-red-light">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <span class="logo-lg"><img src="../dist/img/logo.png"> SMA Fons Vitae 1</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Top Navbar -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="hidden-xs">
              <a>
                <i class="fa fa-calendar"></i>
                <script type='text/javascript'>
                  var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                  var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
                  var date = new Date();
                  var day = date.getDate();
                  var month = date.getMonth();
                  var thisDay = date.getDay(),
                      thisDay = myDays[thisDay];
                  var yy = date.getYear();
                  var year = (yy < 1000) ? yy + 1900 : yy;
                  document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                </script>
              </a>
            </li>
            <li class="hidden-xs">
              <a>
                <i class="fa fa-clock-o"></i>
                <span id="jam"></span>
                <script type="text/javascript">
                  function startTime() {
                    var today=new Date(),
                      curr_hour=today.getHours(),
                      curr_min=today.getMinutes(),
                      curr_sec=today.getSeconds();
                    curr_hour=checkTime(curr_hour);
                    curr_min=checkTime(curr_min);
                    curr_sec=checkTime(curr_sec);
                    document.getElementById('jam').innerHTML=curr_hour+":"+curr_min+":"+curr_sec;
                  }
                  function checkTime(i) {
                    if (i<10) i="0" + i;
                    return i;
                  }
                  setInterval(startTime, 500);
                </script>
              </a>
            </li>
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-user"></i>
                <?php 
                  $query=mysqli_query($connect,"SELECT * FROM siswa WHERE nis = '$nis'");
                  $data=mysqli_fetch_array($query);
                ?>
                <span><?php echo $data['nama_siswa'];?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-down pull-right"></i>
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="../dist/img/user.png" class="img-circle" alt="User Image">
                  <p>
<<<<<<< HEAD
                    <?php echo $data['nama_siswa'];?> - Siswa
                    <small<?php echo $data['tahun_masuk']; ?></small>
=======
                    Wawan Setyadi - Siswa
                    <small>Angkatan</small>
>>>>>>> 9de91c9a999d5585a35289f3392bab069ddbed15
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Keluar</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- Left sidebar -->
    <aside class="main-sidebar">
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../dist/img/user.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $data['nama_siswa'];?></p>
            <a href="#"><?php echo $data['nis'];?></a>
          </div>
        </div>
        <!-- Sidebar menu -->
        <ul class="sidebar-menu">
          <li class="header">MENU UTAMA</li>
          <li><a href="index.php"><i class="fa fa-circle-o"></i> Beranda</a></li>
          <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Biodata</a></li>
          <li><a href="nilai.php"><i class="fa fa-circle-o"></i> Lihat Nilai</a></li>
          <li><a href="rekap.php"><i class="fa fa-circle-o"></i> Rekapitulasi Studi</a></li>
        </ul>
      </section>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <!-- Content Header -->
      <div class="header-section">
        <i class="glyphicon glyphicon-education pull-right"></i>
        <h1>Biodata Siswa</h1>
      </div>
      <div class="bread-section">
        <a href="index.php">SIMAK </a><span>> </span>Biodata
      </div>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <section class="col-lg-12">
            <!-- Biodata -->
            <div class="box box-solid box-danger">
              <div class="box-header">
                <i class="fa fa-user"></i>
                <h3 class="box-title">Profil Siswa</h3>
              </div>
              <div class="box-body">
                <div class="col-sm-12 col-lg-3 foto">
                  <img src="../dist/img/user.png">
                </div>
                <div class="col-sm-12 col-lg-9">
                  <div class="box box-danger">
                    <div class="box-body">
                      <table class="table table-striped">
                        <tr>
                          <td><b>Nama Siswa</b></td>
                          <td> : </td>
                          <td><?php echo $data['nama_siswa'];?></td>
                        </tr>
                        <tr>
                          <td><b>Jenis Kelamin</b></td>
                          <td> : </td>
                          <td>Laki-laki</td>
                        </tr>
                        <tr>
                          <td><b>Tempat Lahir</b></td>
                          <td> : </td>
                          <td>Bogor</td>
                        </tr>
                        <tr>
                          <td><b>Tanggal Lahir</b></td>
                          <td> : </td>
                          <td>08 Juli 1997</td>
                        </tr>
                        <tr>
                          <td><b>Alamat Rumah</b></td>
                          <td> : </td>
                          <td>Jalan Melati 5 No. 24</td>
                        </tr>
                        <tr>
                          <td><b>Nomor Telepon</b></td>
                          <td> : </td>
                          <td>081383126190</td>
                        </tr>
                        <tr>
                          <td><b>Nama Orangtua</b></td>
                          <td> : </td>
                          <td>Kusnanto</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b><a href="http://www.fonsvitae-1.sch.id/">SIMAK FV</a></b>
      </div>
      <strong>Copyright &copy; 2017 </strong>| All rights reserved.
    </footer>
  </div>

  <!-- JavaScript -->
  <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
  <script> $.widget.bridge('uibutton', $.ui.button); </script>
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <script src="../plugins/fastclick/fastclick.js"></script>
  <script src="../dist/js/app.min.js"></script>
</body>
</html>
