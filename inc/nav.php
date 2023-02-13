<?php

// if (!isset($_SESSION['email'])) {
//     header("location:login.php");
// }

?>

<?php
if (isset($_SESSION['emaill'])) {
    $querys = mysqli_query($con, "SELECT * FROM users where email = '$_SESSION[emaill]'");

    $row = mysqli_fetch_assoc($querys);

    if ($row == 0)
    {
        $id = '';
        $username = '';
        $statuse = '';
    }
    else
    {
        $id = $row['id'];
        $username = $row['name'];
        $statuse = $row['statuse'];
    }
    
}

?>

<nav class="navbar navbar-expand-lg  sticky-top">

    <div class="container">
        <a class="navbar-brand" href="index.php"><span class="it">IT<span class="dot"></span></span> LIVE</a>
        <button class="navbar-toggler navbar-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav speas mb-2 mb-lg-0" dir="rtl">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php">الصفحة الرئيسية</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php#about">عَنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php#speakers"> المتحدثين</a>
                </li>
                <?php
                
                if (isset($_SESSION['emaill'])) 
                    {

                        ?>
                            <li class="nav-item dropdown" dir="rtl" style="display:none ;">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    التسجيل بصفة
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                    <li><a class="dropdown-item" href="volunteer_regester.php">متطوع</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="guest_regester.php">ضيف</a></li>


                                </ul>
                            </li>
                        <?php

                    }
                    else
                        {
                            ?>
                                <li class="nav-item dropdown" dir="rtl" >
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        التسجيل بصفة
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                                        <li><a class="dropdown-item" href="volunteer_regester.php">متطوع</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="guest_regester.php">ضيف</a></li>


                                    </ul>
                                </li>
                            <?php
                        }

                ?>
                

                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="index.php#contact">اتصل بنا</a>
                </li>


            </ul>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn-drop" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <?php
                    if (isset($_SESSION['emaill'])) 
                    {
                        if($statuse == '0')
                            {
                                ?>
                                    <li><a class="dropdown-item" >متطوع</a></li>
                                <?php
                            }
                            else
                                {
                                    ?>
                                    <li><a class="dropdown-item" >ضيف</a></li>
                                <?php
                                }
                    ?>
                        <li><a class="dropdown-item"><?php echo $username?></a></li>
                        
                    <li><a class="dropdown-item" href="edit_account.php?id=<?php echo $id?>">تعديل الحساب</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="logout.php">تسجيل الخروج</a></li>
                    <?php
                        
                    }
                    else
                        {
                            ?>
                        <li><a class="dropdown-item" href="login.php">تسجيل الدخول</a></li>
                            <?php
                        }
                    ?>

                    
                </ul>
            </li>
        </div>
    </div>


</nav>