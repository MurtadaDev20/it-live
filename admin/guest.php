<?php include 'inc/header.php' ?>
<?php include 'function/config.php' ?>
<?php

// if (!isset($_SESSION['username'])) {
//   header("location:index.php");
// }

?>
<?php
global $con;
$sql = "SELECT * FROM users where statuse = '1'  ORDER BY id DESC";
$res = mysqli_query($con, $sql);



?>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <?php include 'inc/nav.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'inc/aside.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">

        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">معلومات الضيوف</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>

            </div>
          </div>
          <div class="card-body">
            <table class="table table-striped table-bordered  text-center">
              <thead>
                <tr>
                  <th scope="col">العدد</th>
                  <th scope="col">الاسم</th>
                  <th scope="col"> الايميل </th>

                  <th scope="col">العنوان</th>
                  <th scope="col">رقم الهاتف</th>
                  <th scope="col">حذف</th>


                </tr>
              </thead>
              <tbody>
                <?php
                $count = 1;
                while ($row = mysqli_fetch_assoc($res)) {

                ?>
                  <tr>
                    <td><?php echo $count++ ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td class="pt-3">
                      <a class="btn btn-danger btn-md" href="guest_del.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash"></i></a>
                    </td>


                  </tr>
                <?php
                }
                ?>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->

          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'inc/footer.php' ?>

    <?php


    // active_status
    // function active_status()
    // {
    //   global $con;

    //   if (isset($_GET['opr']) && $_GET['opr'] != "") {
    //     $operation = $_GET['opr'];
    //     $id = $_GET['id'];

    //     if ($operation == 'active') {
    //       $status = 1;
    //     } else {
    //       $status = 0;
    //     }

    //     $query = "UPDATE products SET status = '$status' WHERE p_id='$id'";
    //     $result = mysqli_query($con, $query);

    //     if ($result) {
    //       header("location:products_manage.php");
    //     }
    //   }
    // }

    // function active_type()
    // {
    //   global $con;

    //   if (isset($_GET['opr_trans']) && $_GET['opr_trans'] != "") {
    //     $operation_transfer = $_GET['opr_trans'];
    //     $id = $_GET['id'];

    //     if ($operation_transfer == 'activee') {
    //       $type = 1;
    //     } else {
    //       $type = 0;
    //     }

    //     $query = "UPDATE products SET type = '$type' WHERE p_id='$id'";
    //     $result = mysqli_query($con, $query);

    //     if ($result) {
    //       header("location:products_manage.php");
    //     }
    //   }
    // }

    ?>