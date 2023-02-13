<?php include 'inc/header.php' ?>
<?php
include 'function/config.php';


?>
<?php

// if (!isset($_SESSION['username'])) {
//   header("location:index.php");
// }

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
          <div class="row mb-2">


          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->

      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">اضافة فيديو</h3>
                <form method="POST" enctype="multipart/form-data">
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
              </div>
              <div class="card-body">
                <form method="POST" enctype='multipart/form-data'>
                  <div class="mb-3">

                  </div>

                  <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">العنوان</label>
                    <input type="text" class="form-control" id="exampleInputText1" name="title" required>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">الوصف</label>
                    <textarea type="text" class="form-control" cols="30" rows="10" id="summernote" name="content" required></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">اضافة فيديو </label>
                    <input type="file" class="form-control" id="exampleInputText1" name="video" required>
                  </div>






                  <button type="submit" class="btn btn-primary" name="add_btn">ارسال</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
        <!-- /.card -->
    </div> -->
  </div>

  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'inc/footer.php' ?>


  <?php

  global $con;

  if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_btn'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];


    $video = $_FILES['video']['name'];
    $type = $_FILES['video']['type'];
    $tmp_name = $_FILES['video']['tmp_name'];
    $size = $_FILES['video']['size'];

    $video_ext = explode('.', $video);
    $video_correct_ext = strtolower(end($video_ext));
    $allow = array('mp4', 'mov', 'wmv');
    $path = "video/" . $video;
    echo $video;
    $msg = "";
    if (empty($title)) {
  ?>
      <script>
        $(function() {
          Swal.fire('حدث خطا', 'الرجاء ادخل العنوان ', 'error')
        })
      </script>
    <?php
    } elseif (empty($content)) {
    ?>
      <script>
        $(function() {
          Swal.fire('حدث خطا', 'الرجاء قم بادخال المحتوى ', 'error')
        })
      </script>
      <?php
    } elseif (in_array($video_correct_ext, $allow)) {
      // if ($size < 50000000) {

      $exit = "SELECT * FROM video_speakers where title = '$title'";
      $sql = mysqli_query($con, $exit);

      if (mysqli_fetch_assoc($sql)) {
      ?>
        <script>
          $(function() {
            Swal.fire('ادخل عنوان جديد', ' العنوان موجود ', 'question')
          })
        </script>
        <?php
      } else {
        $query = "INSERT INTO  video_speakers (title , content, video ) VALUES ('$title','$content','$video')";
        $result = mysqli_query($con, $query);

        if ($result) {

        ?>
          <script>
            $(function() {
              Swal.fire(' تمت اضافة الفديو', '  ', 'success')
            })
          </script>
      <?php
          move_uploaded_file($tmp_name, $path);
        }
      }
      // } else {
      ?>
      <!-- <script>
          $(function() {
            Swal.fire('حجم الفديو كبير', '  ', 'error')
          })
        </script> -->
    <?php
      // }
    } else {
    ?>
      <script>
        $(function() {
          Swal.fire('لايمكنك اضافة هذا النوع من الامتداد في الفديو', '  ', 'error')
        })
      </script>
  <?php
    }
  }




  ?>