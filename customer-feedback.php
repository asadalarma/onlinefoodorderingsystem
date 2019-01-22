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

            <section class="contact-page inner-page">
                <div class="container">
                    <div class="row">
                        <!-- REGISTER -->
                        <div class="col-md-12">
                            <h4>Feedback</h4>
                            <div class="widget">
                                <div class="widget-body">
                                    <form method="post" action="customerfeedback-register.php" enctype="multipart/form-data">
                                        <?php
                                        if(isset($_SESSION["cutomerfeedbackmessage"]) && !empty($_SESSION["cutomerfeedbackmessage"])) {
                                            echo '<div class="alert alert-info alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                     <strong>Success! </strong>'.$_SESSION["cutomerfeedbackmessage"].'</div>';
                                        }

                                        if(isset($_SESSION["cutomerfeedbackerror"]) && !empty($_SESSION["cutomerfeedbackerror"])) {
                                            echo '<div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                     <strong>Danger! </strong>'.$_SESSION["cutomerfeedbackerror"].'</div>';
                                        }
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Select</label>
                                                    <div class="form-group">
                                                        <?php
                                                        $restaurantquery="select * from users where user_type='restaurant'";
                                                        $restaurantquery_result = mysqli_query($conn,$restaurantquery);

                                                        $count=mysqli_num_rows($restaurantquery_result);

                                                        if($count) {
                                                            echo '<select name="restaurant" class="form-control" id="exampleSelect1" required>';
                                                            echo '<option value="">Select Restaurant</option>';
                                                            while ($row = mysqli_fetch_assoc($restaurantquery_result)) {
                                                             echo '<option value='.$row["id"].'>'.$row["name"].'</option>';
                                                            }
                                                            echo '</select>';
                                                        }
                                                        else
                                                        {
                                                            echo "please insert restaurant first";
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Rating</label>
                                                    <div class="clearfix"></div>
                                                    <fieldset class="rating" aria-required="true">
                                                        <input type="radio" id="star5" name="rating" value="5" />
                                                        <label class="full" for="star5" title="Excellent - 5 stars"></label>

                                                        <input type="radio" id="star4half" name="rating" value="4.5" />
                                                        <label class="half" for="star4half" title="Best - 4.5 stars"></label>

                                                        <input type="radio" id="star4" name="rating" value="4" />
                                                        <label class="full" for="star4" title="Best - 4 stars"></label>

                                                        <input type="radio" id="star3half" name="rating" value="3.5" />
                                                        <label class="half" for="star3half" title="Pretty Good - 3.5 stars"></label>

                                                        <input type="radio" id="star3" name="rating" value="3" />
                                                        <label class="full" for="star3" title="Pretty Good - 3 stars"></label>

                                                        <input type="radio" id="star2half" name="rating" value="2.5" />
                                                        <label class="half" for="star2half" title="Good - 2.5 stars"></label>

                                                        <input type="radio" id="star2" name="rating" value="2" />
                                                        <label class="full" for="star2" title="Good - 2 stars"></label>

                                                        <input type="radio" id="star1half" name="rating" value="1.5" />
                                                        <label class="half" for="star1half" title="Poor - 1.5 stars"></label>

                                                        <input type="radio" id="star1" name="rating" value="1" />
                                                        <label class="full" for="star1" title="Poor - 1 star"></label>

                                                        <input type="radio" id="starhalf" name="rating" value=".5" />
                                                        <label class="half" for="starhalf" title="Poor - 0.5 stars"></label>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleTextarea">Customer Feedback</label>
                                                    <textarea name="feedback" class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <p>
                                            <button type="submit" name="register_customerfeedback" class="btn theme-btn">Submit</button>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- end: Widget -->
                        </div>
                        <!-- /REGISTER -->
                    </div>
                </div>
            </section>
            <section class="app-section">
                <div class="app-wrap">
                    <div class="container">
                        <div class="row text-img-block text-xs-left">
                            <div class="container">
                                <div class="col-xs-12 col-sm-6  right-image text-center">
                                    <figure> <img src="images/app.png" alt="Right Image"> </figure>
                                </div>
                                <div class="col-xs-12 col-sm-6 left-text">
                                    <h3>The Best Food Delivery App</h3>
                                    <p>Now you can make food happen pretty much wherever you are thanks to the free easy-to-use Food Delivery &amp; Takeout App.</p>
                                    <div class="social-btns">
                                        <a href="#" class="app-btn apple-button clearfix">
                                            <div class="pull-left"><i class="fa fa-apple"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">App Store</span> </div>
                                        </a>
                                        <a href="#" class="app-btn android-button clearfix">
                                            <div class="pull-left"><i class="fa fa-android"></i> </div>
                                            <div class="pull-right"> <span class="text">Available on the</span> <span class="text-2">Play store</span> </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- start: FOOTER -->
            <?php include("footer.php"); ?>
            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
    </div>
    <!--/end:Site wrapper -->
    <?php include("footerscripts.php"); ?>
</body>

</html>