<?php include("../requiredFiles.php");
$id = isset($_GET['id']) ? $_GET['id'] : null; ?>
<!-- - var navbarShadow = true-->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<?php include("../header.php"); ?>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
      data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
<?php include("../navbar.php"); ?>
<!-- ////////////////////////////////////////////////////////////////////////////-->
<?php include("../sidebar.php"); ?>

<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-body">
            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="card">

                            <div class="card-header">
                                <h4 class="card-title">Meals View</h4>
                                <div class="heading-elements">
                                    <div class="btn-group">
                                        <a href="edit.php?id=<?php echo $id ?>"
                                           class="btn btn-info">Edit</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-responsive table-bordered mb-0">
                                            <tbody>
                                            <?php
                                            $selectquery = "select m.id as mealid,u.name as restaurantname,m.name as mealname,m.description as mealdescription,m.image as mealimage from meals m , users u where u.id=m.restaurant_id and m.is_deleted=0 and u.is_deleted=0 and m.id=$id";
                                            $selectquery_result = mysqli_query($conn, $selectquery);
                                            $count=mysqli_num_rows($selectquery_result);
                                            if($count){
                                               $row = mysqli_fetch_assoc($selectquery_result);
                                            }
                                            ?>
                                            <tr>
                                                <td class="width-200">Restaurant Name</td>
                                                <td class="width-800"><?php echo (isset($row["restaurantname"]) ? $row["restaurantname"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Meal Name</td>
                                                <td class="width-800"><?php echo (isset($row["mealname"]) ? $row["mealname"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Meal Description</td>
                                                <td class="width-800"><?php echo (isset($row["mealdescription"]) ? $row["mealdescription"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Image</td>
                                                <td class="width-800"><img height="200" width="200" class="img-thumbnail" src="<?php echo (isset($row["mealimage"]) ? imageurl($row["mealimage"]) : null); ?>"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<?php include("../footer.php"); ?>

</body>
</html>