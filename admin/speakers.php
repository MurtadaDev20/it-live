<?php
include 'function/config.php';


?>
<?php include 'inc/header.php' ?>

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
                                <h3 class="card-title">المتحدثين</h3>
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
                                        <label for="exampleInputText1" class="form-label">اسم المتحدث</label>
                                        <input type="text" class="form-control" id="exampleInputText1" name="username" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">النص</label>
                                        <textarea type="text" class="form-control" cols="30" rows="10" id="summernote" name="text" required></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="exampleInputText1" class="form-label">اضافة صورة </label>
                                        <input type="file" class="form-control" id="exampleInputText1" name="img" required>
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
        </div>
    </div>

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include 'inc/footer.php' ?>


    <?php

    global $con;

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_btn'])) {

        $username = $_POST['username'];
        $text = $_POST['text'];


        $img = $_FILES['img']['name'];
        $type = $_FILES['img']['type'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $size = $_FILES['img']['size'];

        $img_ext = explode('.', $img);
        $img_correct_ext = strtolower(end($img_ext));
        $allow = array('jpg', 'png', 'jpeg');
        $path = "img/" . $img;

        $msg = "";
        if (empty($username)) {
    ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء ادخل الاسم ', 'error')
                })
            </script>
        <?php
        } elseif (empty($text)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء قم بادخال النص ', 'error')
                })
            </script>
            <?php
        } elseif (in_array($img_correct_ext, $allow)) {
            // if ($size < 50000000) {

            $exit = "SELECT * FROM speakers where username = '$username'";
            $sql = mysqli_query($con, $exit);

            if (mysqli_fetch_assoc($sql)) {
            ?>
                <script>
                    $(function() {
                        Swal.fire('ادخل اسم جديد', ' الاسم موجود ', 'question')
                    })
                </script>
                <?php
            } else {
                $query = "INSERT INTO  speakers (username , text, image ) VALUES ('$username','$text','$img')";
                $result = mysqli_query($con, $query);

                if ($result) {

                ?>
                    <script>
                        $(function() {
                            Swal.fire(' تمت اضافة المتحدث', '  ', 'success')
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
                    Swal.fire('لايمكنك اضافة هذا النوع من الامتداد في الصور', '  ', 'error')
                })
            </script>
    <?php
        }
    }




    ?>