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
         <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
               <div class="container">
                  <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                  <a class="navbar-brand" href="index.html"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
                  <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                     <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Food</a>
                           <div class="dropdown-menu"> <a class="dropdown-item" href="food_results.html">Food results</a> <a class="dropdown-item" href="map_results.html">Map results</a></div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                           <div class="dropdown-menu"> <a class="dropdown-item" href="restaurants.html">Search results</a> <a class="dropdown-item" href="profile.html">Profile page</a></div>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="pricing.html">Pricing</a> <a class="dropdown-item" href="contact.html">Contact</a> <a class="dropdown-item" href="submition.html">Submit restaurant</a> <a class="dropdown-item" href="registration.php">Registration</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="checkout.html">Checkout</a> 
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- /.navbar -->
         </header>
         <div class="page-wrapper">
            <div class="breadcrumb">
               <div class="container">
                  <ul>
                     <li><a href="#" class="active">Home</a></li>
                     <li><a href="#">Search results</a></li>
                     <li>Profile</li>
                  </ul>
               </div>
            </div>
            <section class="contact-page inner-page">
               <div class="container">
                  <div class="row">
                     <!-- LOGIN -->
                     <div class="col-md-6">
                        <h4>Login</h4>
                        <div class="widget">
                           <div class="widget-body">
                              <form method="post" action="authenticatecustomers.php">
                                  <?php
                                  if(isset($_SESSION["error"]) && !empty($_SESSION["error"]))
                                  {
                                      echo '<div class="alert alert-danger">
                                           <strong>Danger!</strong> '.$_SESSION["error"].'</div>';
                                  }
                                  ?>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">Email</label>
                                       <input class="form-control" type="text" name="customer_email" placeholder="Email" id="email-login">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="exampleInputPassword1">Password</label>
                                       <input type="password" name="customer_password" class="form-control" id="password-login" placeholder="Password">
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <p><button type="submit" name="customer_loggedIn" class="btn theme-btn">Login</button></p>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <!-- end: Widget -->
                        </div>
                        <!-- /LOGIN -->
                     </div>


                      <!-- REGISTER -->
                      <div class="col-md-6">
                          <h4>Register</h4>
                          <div class="widget">
                              <div class="widget-body">
                                  <form method="post" action="authenticatecustomers.php">
                                      <?php
                                      if(isset($_SESSION["message"]) && !empty($_SESSION["message"]))
                                      {
                                          echo '<div class="alert alert-info">
                                           <strong>Success!</strong> '.$_SESSION["message"].'</div>';
                                      }

                                      if(isset($_SESSION["error"]) && !empty($_SESSION["error"]))
                                      {
                                          echo '<div class="alert alert-danger">
                                           <strong>Danger!</strong> '.$_SESSION["error"].'</div>';
                                      }
                                      ?>
                                      <div class="row">
                                          <div class="form-group col-sm-6">
                                              <label for="exampleInputEmail1">Name</label>
                                              <input class="form-control" type="text" name="name" placeholder="Name" id="text-input" required>
                                          </div>
                                          <div class="form-group col-sm-6">
                                              <label for="exampleInputEmail1">Email</label>
                                              <input type="email" class="form-control" name="email" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                          </div>
                                          <div class="form-group col-sm-6">
                                              <label for="exampleInputEmail1">Address</label>
                                              <input class="form-control" type="text" name="address" placeholder="Address" id="addressRegister" required>
                                          </div>
                                          <div class="form-group col-sm-6">
                                              <label for="exampleInputEmail1">Phone number</label>
                                              <input class="form-control" type="tel" name="phone" placeholder="Phone" maxlength="13" id="tel-input-3" pattern="+[0-9]{5}[0-9]{7}[0-9]{1}"
                                                      required>
                                          </div>
                                          <div class="form-group col-sm-6">
                                              <label for="exampleInputPassword1">Password</label>
                                              <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Password" required>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-sm-4">
                                              <p><button type="submit" name="customer_register" class="btn theme-btn">Register</button></p>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                              <!-- end: Widget -->
                          </div>
                          <!-- /REGISTER -->
                      </div>
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
            <footer class="footer">
               <div class="container">
                  <!-- top footer statrs -->
                  <div class="row top-footer">
                     <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                        <a href="#"> <img src="images/food-picky-logo.png" alt="Footer logo"> </a> <span>Order Delivery &amp; Take-Out </span> 
                     </div>
                     <div class="col-xs-12 col-sm-2 about color-gray">
                        <h5>About Us</h5>
                        <ul>
                           <li><a href="#">About us</a> </li>
                           <li><a href="#">History</a> </li>
                           <li><a href="#">Our Team</a> </li>
                           <li><a href="#">We are hiring</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                        <h5>How it Works</h5>
                        <ul>
                           <li><a href="#">Enter your location</a> </li>
                           <li><a href="#">Choose restaurant</a> </li>
                           <li><a href="#">Choose meal</a> </li>
                           <li><a href="#">Pay via credit card</a> </li>
                           <li><a href="#">Wait for delivery</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-2 pages color-gray">
                        <h5>Pages</h5>
                        <ul>
                           <li><a href="#">Search results page</a> </li>
                           <li><a href="#">User Sing Up Page</a> </li>
                           <li><a href="#">Pricing page</a> </li>
                           <li><a href="#">Make order</a> </li>
                           <li><a href="#">Add to cart</a> </li>
                        </ul>
                     </div>
                     <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                        <h5>Popular locations</h5>
                        <ul>
                           <li><a href="#">Sarajevo</a> </li>
                           <li><a href="#">Split</a> </li>
                           <li><a href="#">Tuzla</a> </li>
                           <li><a href="#">Sibenik</a> </li>
                           <li><a href="#">Zagreb</a> </li>
                           <li><a href="#">Brcko</a> </li>
                           <li><a href="#">Beograd</a> </li>
                           <li><a href="#">New York</a> </li>
                           <li><a href="#">Gradacac</a> </li>
                           <li><a href="#">Los Angeles</a> </li>
                        </ul>
                     </div>
                  </div>
                  <!-- top footer ends -->
                  <!-- bottom footer statrs -->
                  <div class="row bottom-footer">
                     <div class="container">
                        <div class="row">
                           <div class="col-xs-12 col-sm-3 payment-options color-gray">
                              <h5>Payment Options</h5>
                              <ul>
                                 <li>
                                    <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/stripe.png" alt="Stripe"> </a>
                                 </li>
                                 <li>
                                    <a href="#"> <img src="images/bitcoin.png" alt="Bitcoin"> </a>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-xs-12 col-sm-4 address color-gray">
                              <h5>Address</h5>
                              <p>Concept design of oline food order and deliveye,planned as restaurant directory</p>
                              <h5>Phone: <a href="tel:+080000012222">080 000012 222</a></h5>
                           </div>
                           <div class="col-xs-12 col-sm-5 additional-info color-gray">
                              <h5>Addition informations</h5>
                              <p>Join the thousands of other restaurants who benefit from having their menus on TakeOff</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- bottom footer ends -->
               </div>
            </footer>
            <!-- end:Footer -->
         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
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
</body>

</html>