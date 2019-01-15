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
            <!--<div class="breadcrumb">
                <div class="container">
                    <ul>
                        <li><a href="#" class="active">Home</a></li>
                        <li><a href="#">Search results</a></li>
                        <li>Profile</li>
                    </ul>
                </div>
            </div>-->
            <section class="contact-page inner-page">
                <div class="container">
                    <div class="row">
                        <!-- REGISTER -->
                        <div class="col-md-12">
                            <h4>Restaurant Registration</h4>
                            <div class="widget">
                                <div class="widget-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Restaurant Name</label>
                                            <input class="form-control" type="text" name="name" id="example-text-input" placeholder="Restaurant Name"> </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email"> </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone number</label>
                                            <input class="form-control" type="tel" name="phone" id="example-tel-input" placeholder="Phone"> </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">URL</label>
                                            <input class="form-control" type="url" name="url" id="example-url-input" placeholder="Enter email"> </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Open Hours</label>
                                            <input class="form-control" value="" name="openingHours"> </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Closing Hours</label>
                                            <input class="form-control" value="" name="closingHours"> </div>
                                        <div class="form-group">
                                            <label for="exampleTextarea">Example textarea</label>
                                            <textarea class="form-control" name="textarea" id="exampleTextarea" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">File input</label>
                                            <input type="file" name="inputFile" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"> <small id="fileHelp" class="form-text text-muted">Max file size 1MB.</small> </div>
                                        <p>
                                            <button type="submit" class="btn theme-btn">Submit</button>
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