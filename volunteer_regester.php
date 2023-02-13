<?php
include 'inc/header.php';
?>

<?php include 'inc/nav.php' ?>
<style>
    body {
        background-color: #f3f3f3 !important;
    }

    .login {
        width: 500px;
        margin: 80px auto;
        background-color: white;
        padding: 20px 40px;
        border-radius: 10px;
    }

    .login h5 {
        color: #555;
        margin-bottom: 20px;
        text-align: center;

    }

    /* .login button {
        margin-right: 80px;
    } */
</style>
</head>

<body>

    <div class="login" dir="rtl">

        <form method="POST">

            <h5>انشاء حساب بصفة متطوع</h5>
            <?php


            ?>
            <div class="form-group ">
                <h6 class="text-right">الاسم بالكامل</h6>
                <input type="text " class="form-control mt-3 mb-3" id="mail" name="fullName" required />
            </div>

            <div class="form-group">
                <h6 class="text-right">البريد الالكتروني</h6>
                <input type="email" class="form-control mt-3 mb-3" id="mail" name="email" required />
            </div>

            <div class="form-group">
                <h6 class="text-right">الرمز السري</h6>
                <input type="password" class="form-control mt-3 mb-3" id="pass" name="password" required />
            </div>

            <div class="form-group">
                <h6 class="text-right">عنوان السكن</h6>
                <input type="text" class="form-control mt-3 mb-3" id="pass" name="address" required />
            </div>

            <div class="form-group">
                <h6 class="text-right">رقم الهاتف</h6>
                <input type="text" class="form-control mt-3 mb-3" id="pass" name="phone" required />
            </div>



            <button class="btn btn-primary detils-btn mt-3 mb-3 display-inline-block" name="guest-regester">انشاء حساب</button>


        </form>
        <div class="mt-3">
            <a href="login.php">تسجيل الدخول</a>
        </div>
    </div>



    <?php include 'inc/footer.php' ?>





    <?php

    global $con;

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guest-regester'])) {

        $fullname = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];



        if (empty($fullname)) {
    ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء ادخل اسم ', 'error')
                })
            </script>
        <?php
        } elseif (empty($email)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء قم بادخال البريد ', 'error')
                })
            </script>
        <?php
        } elseif (empty($password)) {
        ?>
            <script>
                $(function() {
                    Swal.fire('حدث خطا', 'الرجاء قم بادخال الرمز السري ', 'error')
                })
            </script>
            <?php
        } elseif (is_numeric($phone)) {


            $exit = "SELECT * FROM users where email = '$email'";
            $sql = mysqli_query($con, $exit);

            if (mysqli_fetch_assoc($sql)) {
            ?>
                <script>
                    $(function() {
                        Swal.fire('الحساب موجود بالفعل', 'هل تريد اضافة حساب جديد  ', 'question')
                    })
                </script>
                <?php
            } else {
                $query = "INSERT INTO  users (name , email, password , address, phone ,statuse ) VALUES ('$fullname','$email','$password','$address','$phone','0')";
                $result = mysqli_query($con, $query);

                if ($result) {

                ?>
                    <script>
                        $(function() {
                            Swal.fire('تم التسجيل', '  ', 'success')
                        })
                    </script>
            <?php

                }
            }
        } else {
            ?>
            <script>
                $(function() {
                    Swal.fire('خطا في رقم الهاتف', 'الرجاء قم بادخال رقم الهاتف الصحيح  ', 'error')
                })
            </script>
    <?php
        }
    }





    ?>