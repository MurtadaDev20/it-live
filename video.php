<?php include 'inc/header.php' ?>

<!-- Start Navbar -->
<?php include 'inc/nav.php' ?>

<?php
    $query = "SELECT * FROM video_speakers   ORDER BY id_vid DESC";
    $sql = mysqli_query($con, $query);
?>
<!-- End Navbar -->

<div class="vide-pvideo" id="video">
    <div class="container">
        <div class="content">

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php
                                while($row=mysqli_fetch_assoc($sql))
                                {
                                    ?>
                                        <div class="video">
                                            <video width="100%" class="sub-vid" controls>
                                                <source src="./admin/video/<?php echo $row['video']?>">
                                            </video>
                                            <h3 class="video-h1" dir="rtl">
                                                <?php echo $row['title']?>
                                            </h3>
                                            <hr>
                                            <p class="video-p" dir="rtl">
                                                    <?php echo $row['content']?>                                            
                                                </p>
                                        </div>
                                    <?php
                                }
                            ?>
                            
                        

                        </div>
                    </div>
                </div>

            </div>


        </div>



    </div>
</div>
</div>


<?php include 'inc/footer.php' ?>