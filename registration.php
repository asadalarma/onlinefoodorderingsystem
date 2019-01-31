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
                                  if(isset($_SESSION["customerloginerror"]) && !empty($_SESSION["customerloginerror"]))
                                  {
                                      echo '<div class="alert alert-danger">
                                           <strong>Danger!</strong> '.$_SESSION["customerloginerror"].'</div>';
                                  }
                                  ?>
                                 <div class="row">
                                    <div class="form-group col-sm-12">
                                       <label for="exampleInputEmail1">Email</label>
                                       <input class="form-control" type="text" name="email" placeholder="Email" id="email-login">
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label for="exampleInputPassword1">Password</label>
                                       <input type="password" name="password" class="form-control" id="password-login" placeholder="Password">
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
                                      if(isset($_SESSION["cutomerregmessage"]) && !empty($_SESSION["cutomerregmessage"]))
                                      {
                                          echo '<div class="alert alert-info">
                                           <strong>Success!</strong> '.$_SESSION["cutomerregmessage"].'</div>';
                                      }

                                      if(isset($_SESSION["cutomerregerror"]) && !empty($_SESSION["cutomerregerror"]))
                                      {
                                          echo '<div class="alert alert-danger">
                                           <strong>Danger!</strong> '.$_SESSION["cutomerregerror"].'</div>';
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
                                              <input class="form-control" type="tel" name="phone" placeholder="Phone" maxlength="13" id="tel-input-3" pattern="^\+[0-9]{4}[0-9]{7}[0-9]{1}$" title="The phone must be in this format +920001234567" required>
                                          </div>
                                          <div class="form-group col-sm-6">
                                              <label for="exampleInputPassword1">Password</label>
                                              <input type="password" name="password" class="form-control" id="inputPassword1" placeholder="Password" minlength="6" required>
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

             <?php include("footer.php"); ?>

         </div>
         <!-- end:page wrapper -->
      </div>
      <!--/end:Site wrapper -->
     <?php include("footerscripts.php"); ?>
</body>

</html>