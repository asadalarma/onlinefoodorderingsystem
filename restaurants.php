<?php
include("customerrequiredfiles.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet"> </head>

<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <?php include("header.php"); ?>

        <div class="page-wrapper">
            <!-- top Links -->
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <div class="inner-page-hero bg-image" data-image-src="http://placehold.it/1670x480">
                <div class="container"> </div>
                <!-- end:Container -->
            </div>
            <!-- //results show -->
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-7 col-md-12 ml-10 col-lg-9">
                            <?php $restaurantquery = "select * from users where user_type='restaurant' and is_deleted=0";
                            $restaurantqueryresult = mysqli_query($conn, $restaurantquery);
                            $count = mysqli_num_rows($restaurantqueryresult);
                            if($count){
                                while($row = mysqli_fetch_assoc($restaurantqueryresult)){
                                    ?>

                                    <div class="bg-gray restaurant-entry">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-12 col-lg-8 text-xs-center text-sm-left">
                                                <div class="entry-logo">
                                                    <a class="img-fluid" href="<?php echo imageurl($row["image"]); ?>"><img height="100" width="100" src="<?php echo imageurl($row["image"]); ?>" alt="Food logo"></a>
                                                </div>
                                                <!-- end:Logo -->
                                                <div class="entry-dscr">
                                                    <h5><a href="#"><?php echo $row["name"]; ?></a></h5>
                                                </div>
                                                <!-- end:Entry description -->
                                            </div>
                                            <div class="col-sm-12 col-md-12 col-lg-4 text-xs-center">
                                                <div class="right-content bg-white">
                                                    <div class="right-review">
                                                        <a href="restaurantdetails.php?id=<?php echo $row["id"]; ?>" class="btn theme-btn-dash">View Menu</a> </div>
                                                </div>
                                                <!-- end:right info -->
                                            </div>
                                        </div>
                                        <!--end:row -->
                                    </div>
                                    <?php
                                }
                            }

                            ?>

                            <!-- end:Restaurant entry -->
                        </div>
                    </div>
                </div>
            </section>

            <!-- start: FOOTER -->
            <?php include("footer.php"); ?>
            <!-- end:Footer -->
        </div>
    </div>
    <!--/end:Site wrapper -->
    <?php include("footerscripts.php"); ?>
</body>

</html>