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

            <h5>تسجيل الدخول</h5>

            <div class="form-group">
                <h6 class="text-right">البريد الالكتروني</h6>
                <input type="email" class="form-control mt-3 mb-3" id="mail" name="email" />
            </div>
            <div class="form-group">
                <h6 class="text-right">الرمز السري</h6>
                <input type="password" class="form-control mt-3" id="pass" name="password" />
            </div>
            <div class="">
                <button class="btn btn-primary detils-btn   mt-3 " name="btn_login"> تسجيل الدخول</button>
            </div>
        </form>
        


    </div>

    <?php
    //Login Checking 


    global $con;
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_login'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];



        if (empty($email) || empty($password)) {

    ?>
            <script>
                $(function() {
                    Swal.fire('الحقول فارغة', 'املا الحقول اولا', 'question')
                })
            </script>
            <?php
        } else {

            // query
            $query = "SELECT * FROM users where email ='$email' and password = '$password'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_assoc($result);
            if ($row) {

                $_SESSION['emaill'] = $email;
                header('location:index.php');
            } else {
            ?>
                <script>
                    $(function() {
                        Swal.fire('خطا في البريد الاكتروني او كلمة المرور', '  ', 'error')
                    })
                </script>
    <?php
            }
        }
    }




    ?>

    <?php include 'inc/footer.php' ?>