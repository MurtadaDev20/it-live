<?php
include 'inc/header.php';
ob_start();
session_start();
include 'function/db.php';


?>



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
            <?php
            login_system();

            ?>
            <div class="form-group text-right">
                <label for="mail" class="text-right"> الايميل</label>
                <input type="text" class="form-control mt-3 mb-3" id="email" name="email" />
            </div>
            <div class="form-group text-right">
                <label for="pass" class="text-right"> الرمز السري</label>
                <input type="password" class="form-control mt-3" id="pass" name="password" />
            </div>
            <button class="btn btn-primary detils-btn " name="btn_login"> تسجيل الدخول</button>

        </form>
    </div>

    <?php
    //Login Checking 
    function login_system()
    {
        global $con;
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_login'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];



            if (empty($email) || empty($password)) {
                //set_message(display_error("please Fill in the Blanks "));
    ?>
                <script>
                    $(function() {
                        Swal.fire('الحقول فارغة', 'املا الحقول اولا', 'question')
                    })
                </script>
                <?php
            } else {

                // query
                $query = "SELECT * FROM admin where email ='$email'";
                $result = mysqli_query($con, $query);
                $row = mysqli_fetch_assoc($result);
                
                if ($row) 
                {
                    
                    if (password_verify($password, $row['password'])) 
                    {
                        if ($row) {
                            $_SESSION['email'] = $email;

                            header('location:dashbord.php');
                        } else {
                            echo "Not Work";
                        }
                    } 
                    else 
                        {
                    ?>
                            <script>
                                $(function() {
                                    Swal.fire('خطا في    كلمة المرور', '  ', 'error')
                                })
                            </script>
                        <?php
                        }
                } 
                else
                    {
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
    }




    ?>