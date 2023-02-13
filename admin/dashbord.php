<?php include 'inc/header.php' ?>
<?php include 'function/config.php' ?>
<?php
  global $con;
  $query = mysqli_query($con, "SELECT * FROM  users where statuse = '0'");
  $count = 0;
  while ($row = mysqli_fetch_assoc($query)) 
  {
  ?>
  <?php
  $count;
  $count++;
  ?>
  <?php

  }

  global $con;
  $querys = mysqli_query($con, "SELECT * FROM  users where statuse = '1'");
  $count_guest = 0;
  while ($row_guest = mysqli_fetch_assoc($querys)) 
  {
  ?>
  <?php
  //$count;
  $count_guest++;
  ?>
  <?php

  }
  ?>
<?php

// if (!isset($_SESSION['username'])) {
//   header("location:index.php");
// }

?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include 'inc/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'inc/aside.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">الواجهة الرئيسية</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <!-- <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">الرئيسية</a></li>
                <li class="breadcrumb-item active">لوحة التحكم </li>
              </ol> -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">


                  <h3><?php echo $count ?><sup style="font-size: 20px"></sup></h3>

                  <p> المتطوعين</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>

                </div>
                <!-- <a href="news_manage.php" class="small-box-footer"> معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">


                  <h3><?php echo $count_guest++ ?><sup style="font-size: 20px"></sup></h3>

                  <p> الضيوف</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>

                </div>
                <!-- <a href="news_manage.php" class="small-box-footer"> معلومات اكثر<i class="fas fa-arrow-circle-right"></i></a> -->
              </div>
            </div>

            <!-- ./col -->

            <!-- ./col -->



            <!-- ./col -->
          </div>
          <!-- /.row -->

          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'inc/footer.php' ?>