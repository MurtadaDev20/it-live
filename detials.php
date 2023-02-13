<?php include 'inc/header.php' ?>
<?php
    if (isset($_GET['id']) && !empty($_GET['id'])) 
    {
        $count = 0;
        global $con;
        $id = $_GET['id'];
        $query = "SELECT * FROM speakers where id = '$id'";
        $res = mysqli_query($con, $query);
        $count = mysqli_num_rows($res);

        if ($count > 0)
        {
            $row = mysqli_fetch_assoc($res);
            $username = $row['username'];
            $text = $row['text'];
            $image = $row['image'];
            
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
<!-- Start Navbar -->
<?php include 'inc/nav.php' ?>


<div class="detials">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col lg 2"></div>
                <div class="col-lg-8">
                    <img class="about-img-detils mt-3 mb-3" src="./admin/img/<?php echo $image?>" alt="">
                </div>
                <div class="col lg 2"></div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="text pb-4 mt-5" dir="rtl">
                        <h1><?php echo $username?></h1>
                        <p><?php echo $text?></p>
                        
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
</div>







<?php include 'inc/footer.php' ?>