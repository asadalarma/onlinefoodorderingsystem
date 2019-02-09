<?php
include("customerrequiredfiles.php");
$id = isset($_GET['id']) ? $_GET['id'] : null; ?>
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
            <!-- start: Inner page hero -->
            <?php $restaurant_details = getRestaurantDetails($conn,$id); ?>
            <section class="inner-page-hero bg-image" data-image-src="http://placehold.it/1670x480">
                <div class="profile">
                    <div class="container">

                        <div class="row">
                            <div class="col-xs-12 col-sm-12  col-md-4 col-lg-4 profile-img">
                                <div class="image-wrap">
                                    <figure><img width="100" height="100" src="<?php echo imageurl($restaurant_details["image"]); ?>" alt="Profile Image"></figure>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 profile-desc">
                                <div class="pull-left right-text white-txt">
                                    <!-- <h6><a href="#"><?php echo $restaurant_details["name"]; ?></a></h6> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end:Inner page hero -->
            <div class="container m-t-30">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                        <div class="sidebar clearfix m-b-20">

                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
                        <div class="menu-widget m-b-30">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              POPULAR ORDERS Delicious hot food! <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                                <div class="clearfix"></div>
                            </div>

                            <div class="collapse in" id="1">
                            <?php $mealsquery = "select * from meals where is_deleted=0 and restaurant_id=$id";
                            $mealsqueryresult = mysqli_query($conn, $mealsquery);
                            $count = mysqli_num_rows($mealsqueryresult);
                            if($count){
                                while($resultmeals = mysqli_fetch_assoc($mealsqueryresult)){
                                    ?>
                                    <div class="food-item white">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-lg-8">
                                                <div class="rest-logo pull-left">
                                                    <a class="restaurant-logo pull-left" href="#"><img src="<?php echo imageurl($resultmeals["image"]); ?>" alt="Food logo"></a>
                                                </div>
                                                <!-- end:Logo -->
                                                <div class="rest-descr">
                                                    <h6><a href="<?php echo imageurl($resultmeals["image"]); ?>"><?php echo $resultmeals["name"]; ?></a></h6>
                                                </div>
                                                <!-- end:Description -->
                                            </div>
                                            <!-- end:col -->
                                            <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left">PKR <?php echo isset($resultmeals["price"]) ? $resultmeals["price"] : 0 ?></span> <a href="#" class="addbtn btn btn-small btn btn-secondary pull-right">&#43;</a> </div>
                                        </div>
                                        <!-- end:row -->
                                    </div>
                                 <?php
                                }
                            }else {
                                ?>
                                <div class="food-item white">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-lg-8">
                                            <div class="rest-logo pull-left">
                                                <a class="restaurant-logo pull-left" href="#"><img src="https://via.placeholder.com/150" alt="Food logo"></a>
                                            </div>
                                            <!-- end:Logo -->
                                            <div class="rest-descr">
                                                <h6><a href="#">No Record Found</a></h6>
                                            </div>
                                            <!-- end:Description -->
                                        </div>
                                        <!-- end:col -->
                                        <div class="col-xs-12 col-sm-12 col-lg-4 pull-right item-cart-info"> <span class="price pull-left"></span> </div>
                                    </div>
                                    <!-- end:row -->
                                </div>
                                <?php
                            }
                            ?>


                                <!-- end:Food item -->
                            </div>
                            <!-- end:Collapse -->
                        </div>
                        <!-- end:Widget menu -->
                        <!-- end:Widget menu -->
                        <!--/row -->
                    </div>
                    <!-- end:Bar -->
                    <div class="col-xs-12 col-md-12 col-lg-3">
                        <div class="sidebar-wrap">
                            <div class="widget widget-cart">
                                <div class="widget-heading">
                                    <h3 class="widget-title text-dark">
                                 Your Shopping Cart
                              </h3>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="order-row bg-white">
                                </div>

                                <!-- end:Order row -->

                                <div class="widget-body">
                                    <div class="price-wrap text-xs-center">
                                        <p>TOTAL</p>
                                        <h3 class="value"><strong>$ 25,49</strong></h3>
                                        <p>Free Shipping</p>
                                        <button type="button" class="btn theme-btn btn-lg">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end:Right Sidebar -->
                </div>
                <!-- end:row -->
            </div>
            <!-- end:Container -->
            <!-- start: FOOTER -->
            <?php include("footer.php"); ?>
            <!-- end:Footer -->
        </div>
        <!-- end:page wrapper -->
    </div>
    <!--/end:Site wrapper -->
    <!-- Modal -->
    <!-- Bootstrap core JavaScript
    ================================================== -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $(document).on("click", ".food-item", function() {
                var mealname = $(this).find(".rest-descr").find('a').text();
                var price  = $(this).find(".price").text();
                if(price == 'PKR 0'){
                    alert("You can not Buy beacause meal price is 0")
                }else{
                    var pricewithoutcurrency = price.replace("PKR", "");
                    $(".order-row").append('<div class="widget-body"><div class="title-row">'+mealname+' <a id="trash"><i class="trash fa fa-trash pull-right"></i></a></div> <div class="form-group row no-gutter"> <div class="col-xs-8">'+price+'</div> <div class="col-xs-4"> <input name="quantity" class="form-control" type="number" value="0" id="example-number-input"> </div> </div> </div>');
                }
            });

            $(document).on("click", "#trash", function() {
               $(this).parent().parent().remove();
            });

        });
    </script>
</body>

</html>