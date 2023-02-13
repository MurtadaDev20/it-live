<?php
include 'inc/header.php';
?>
<?php
    if (isset($_GET['id']) && !empty($_GET['id'])) 
    {
        $count = 0;
        global $con;
        $id = $_GET['id'];
        $query = "SELECT * FROM users where id = '$id'";
        $res = mysqli_query($con, $query);
        $count = mysqli_num_rows($res);

        if ($count > 0)
        {
            $row = mysqli_fetch_assoc($res);
            $username = $row['name'];
            $email = $row['email'];
            $address = $row['address'];
            $phone = $row['phone'];
        } 
        else 
            {
            header("location:index.php");
            }
    } 
    else 
        {
        header("location:index.php");
        }
?>
<?php include 'inc/nav.php' ?>
<style>
    .login {
        width: 300px;
        margin: 80px auto;
    }

    .login h5 {
        color: #555;
        margin-bottom: 20px;
        text-align: center;
    }
</style>
</head>

<body>

    <div class="login" dir="rtl">

        <form method="POST">

            <h5>تعديل الحساب</h5>
            <?php


            ?>
            <div class="form-group ">
                <h6 class="text-right">الاسم بالكامل</h6>
                <input type="text " class="form-control mt-3 mb-3" id="mail" name="fullName" value="<?php echo $username?>" required />
            </div>

            <div class="form-group">
                <h6 class="text-right">البريد الالكتروني</h6>
                <input type="email" class="form-control mt-3 mb-3" id="mail" name="email" value="<?php echo $email?>" required />
            </div>

            <div class="form-group">
                <h6 class="text-right">الرمز السري</h6>
                <input type="password" class="form-control mt-3 mb-3" id="pass" name="password" required />
            </div>

            <div class="form-group">
                <h6 class="text-right">عنوان السكن</h6>
                <input type="text" class="form-control mt-3 mb-3" id="pass" name="address" value="<?php echo $address?>"  required />
            </div>

            <div class="form-group">
                <h6 class="text-right">رقم الهاتف</h6>
                <input type="text" class="form-control mt-3 mb-3" id="pass" name="phone" value="<?php echo $phone?>" required />
            </div>



            <button class="btn btn-primary detils-btn mt-3 mb-3 display-inline-block" name="guest-regester">تعديل الحساب</button>


        </form>
        
    </div>



    <?php include 'inc/footer.php' ?>





    <?php

    global $con;

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guest-regester'])) 
    {

        $fullname = $_POST['fullName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];



        if (empty($fullname)) 
        {
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
        } 
        else 
            {
                
                
                    $query = "UPDATE  users SET name = '$fullname' , email = '$email', password = '$password', address='$address', phone ='$phone' where id ='$id'";
                    $result = mysqli_query($con, $query);

                    if ($result) {

                    ?>
                        <script>
                            $(function() {
                                Swal.fire('تم تعديل الحساب', '  ', 'success')
                            })
                        </script>
                    <?php
                    header("REFRESH:1;URL=index.php");
                    }
            }
    }
    





    ?>