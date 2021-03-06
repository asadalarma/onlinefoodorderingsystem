<header id="header" class="header-scroll top-header headrom">
    <!-- .navbar -->
    <nav class="navbar navbar-dark">
        <div class="container">
            <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
            <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/food-picky-logo.png" alt=""> </a>
            <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Food</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="food_results.html">Food results</a> <a class="dropdown-item" href="map_results.html">Map results</a></div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="restaurants.php">Search results</a> <a class="dropdown-item" href="restaurantdetails.php">Restaurant Detail</a></div>
                    </li>
                    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <div class="dropdown-menu"> <a class="dropdown-item" href="pricing.html">Pricing</a> <a class="dropdown-item" href="contact.html">Contact</a>
                            <div class="dropdown-divider"></div> <a class="dropdown-item" href="checkout.html">Checkout</a> </div>
                    </li>
                   <?php echo (isset($_SESSION["customer_name"]) ? '<li class="nav-item"> <a class="nav-link" href="customer-feedback.php">Feedback</a></li>' : null ); ?>
                    <?php  if(isset($_SESSION["customer_user_type"]) === 'restaurant'){
                       echo '<li class="nav-item"> <a class="nav-link" href="submition.php">Register Restaurant</a></li>';
                    }
                    if(isset($_SESSION["customer_user_type"]) != 'customer' && isset($_SESSION["customer_user_type"]) != 'restaurant'){
                        echo '<li class="nav-item"> <a class="nav-link" href="submition.php">Register Restaurant</a></li>';
                    }
                    ?>
                    <?php echo (isset($_SESSION["customer_name"]) ?  '<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>' : '<li class="nav-item"> <a class="nav-link" href="registration.php">Login / Register</a> </li>'); ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.navbar -->
</header>