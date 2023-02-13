<?php include 'inc/header.php' ?>

<!-- Start Navbar -->
<?php include 'inc/nav.php' ?>

<?php
$query = "SELECT * FROM video_speakers   ORDER BY id_vid DESC";
$sql = mysqli_query($con, $query);

$row = mysqli_fetch_assoc($sql);
if($row == 0)
{
    $title = 'لاتوجد فديوات';
    $content = '' ;
    $video = '';
}
else
{
    $title = $row['title'];
    $content = $row['content'];
    $video = $row['video'];
}



$query_speakers = "SELECT * FROM speakers   ORDER BY id DESC";
$sql_speakers = mysqli_query($con, $query_speakers);
?>

<!-- End Navbar -->

<!-- Start Laanding  -->
<div class="landing">
    <div class="container">
        <div class="content">
            <div class="row">
                <!-- <div class="col-lg-6" dir="rtl">
                    <h1>اهلا وسهلا بكم في IT.LIVE</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Pariatur sit et at placeat harum quasi nesciunt? Aut
                        non quaerat in illum nemo commodi, soluta at repellendus reiciendis natus odio reprehenderit.</p>
                </div>
                <div class="col-lg-1"></div> -->

                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="carousel">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/imag/landin.1jpg.jpg" class="d-block landing-img " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imag/landin2.jpg" class="d-block landing-img " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/imag/landin3.jpg" class="d-block landing-img " alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- <div class="owl-carousel owl-theme">
                            <img class="landing-img item" src="imag/landin.jpg" width="100%" alt="">
                            <img class="landing-img item" src="imag/landin.1jpg.jpg" width="100%" alt="">
                            <img class="landing-img item" src="imag/landin2.jpg" width="100%" alt="">
                            <img class="landing-img item" src="imag/landin3.jpg" width="100%" alt="">
                            <img class="landing-img item" src="imag/landin4.jpg" width="100%" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-1"></div>


            </div>
        </div>
    </div>
</div>
<!-- End Laanding  -->
<!-- Start About -->
<div class="about" id="about">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-5">
                    <img class="about-img " src="assets/imag/about.png" alt="">
                </div>
                <div class="col lg 1"></div>
                <div class="col-lg-6">
                    <div class="text" dir="rtl">
                        <h1>من نحن</h1>
                        <p>أكبر ملتقى عراقي لتكنولوجيا المعلومات في العراق منذ عام 2017.</p>
                        <p>
                            أول تجمع عراقي تكنولوجي سنوي تأسس عام2017 يهتم بمواكبة ونقل احدث التقنيات حول العالم في مجال البرمجة والشبكات والذكاء
                            الاصطناعي وامن البيانات والتحول الرقمي من خلال استضافة الخبرات المتنوعة ذات الشأن وطرح الافكار والحلول الستراتيجية التي
                            تحفز المجتمع التقني و صناع القرار للنهوض بواقع التكنولوجيا في العراق
                        </p>
                        <p>
                            يشارك في المؤتمر سنوياُ شركات محلية وعالمية وشخصيات مؤثرة عراقية وعربية وعالمية في مجال التكنولوجيا والتنمية البشرية
                            ،ضمن اجواء شبابية متجددة تشهد اقبالاً واسعا من الجماهير التقنية المتمثلة بوزارات الدولة وممثلي مؤسسات القطاع الخاص
                            وكوادر الجامعات والطلاب وكل المهتمين بهذا المجال
                        </p>
                        <p>
                            تتخلل المؤتمر فقرات تشجيعية وتكريمية للمشاريع الناشئة والابتكارات
                            توقف المؤتمر خلال فترة جائحة كورونا بعد ثلاث مواسم هادفة وناجحة
                            ويعاود نشاطه مجدداً في الموسم الرابع خلال شهر ايار من سنة 2022
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Speakers -->
<div class="speakers" id="speakers">
    <div class="container">
        <div class="content">
            <div class="title text-center">
                <h1>المتحدثين</h1>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">


                        <div class="col-lg-10 col-md-4 col-sm-6 owl-carousel owl-theme">
                            <?php
                            while ($row_speakers = mysqli_fetch_assoc($sql_speakers)) {
                            ?>
                                <div class="box item">
                                    <div class="row ">
                                        <div class="col-lg-12">
                                            <div class="image">
                                                <a href="detials.php?id=<?php echo $row_speakers['id'] ?>"> <img src="./admin/img/<?php echo $row_speakers['image'] ?>" width="100%" alt=""></a>

                                            </div>
                                            <div class="text text-center" dir="rtl">
                                                <h3> <?php echo $row_speakers['username'] ?> </h3>
                                                <!-- <p><a class="" href="index.html">التفاصيل</a></p> -->
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            <?php
                            }
                            ?>


                        </div>






                    </div>
                </div>
                <div class="col-lg-1"></div>




            </div>
        </div>
    </div>
</div>
<!-- End Speakers -->

<!-- Start Video -->
<div class="vide" id="video">
    <div class="container">
        <div class="content">
            <div class="row">

                <div class="col-lg-6">
                    <h3 class="pb-3" dir="rtl">
                        <?php echo $title; ?>
                    </h3>
                    <p dir="rtl">
                        <?php echo $content; ?>
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="video">
                        <video width="100%" class="sub-vid" controls>
                            <source src="./admin/video/<?php echo $video; ?>">

                        </video>
                    </div>
                </div>

                <div class="more text-center mt-4 mb-4">
                    <a href="video.php" class="btn-more nav-link">مشاهدة المزيد</a>
                </div>

            </div>

        </div>



    </div>
</div>

</div>
<!-- End Video -->
<!-- Start Contact US -->
<div class="contact" id="contact">
    <div class="container">
        <div class="content">
            <h1 class="text-center p-4">
                تواصل معنا
            </h1>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-5">

                </div>

                <div class="col-lg-5" dir="rtl">
                    <form action="" method="POST">
                        <div class="form">
                            <input class="form-control mt-2" placeholder="الاسم" required="" name="username" type="text">
                            <span class="input-border"></span>
                        </div>
                        <div class="form">
                            <input class=" form-control mt-2" placeholder="عنوان البريد الالكتروني" name="email" required type="email">
                            <span class="input-border"></span>
                        </div>
                        <textarea class="form-control  mt-2" placeholder="الرسالة" cols="30" rows="5" name="message"></textarea>

                        <button class="btn-drop  nav-link m-4" name="btn_cont">ارسال</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>


<?php include 'inc/footer.php' ?>

<?php

global $con;
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_cont'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = "INSERT INTO  contact (username , email , text) VALUES ('$name' , '$email' , '$message')";
    $res = mysqli_query($con, $query);
    if ($res) {
        header('location:index.php');
    }
}

?>