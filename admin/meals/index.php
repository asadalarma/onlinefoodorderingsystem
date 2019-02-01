<?php include("../requiredFiles.php"); ?>
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

            <!-- File export table -->
            <section id="file-export">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Meals</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                                <div class="heading-elements">
                                    <div class="btn-group">
                                        <a href="add.php" class="btn btn-info">Add</a>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if(isset($_SESSION["error"]) && !empty($_SESSION["error"])) {
                                echo '<div class="alert alert-danger alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                     <strong>Warning! </strong>'.$_SESSION["error"].'</div>';
                            }
                            if(isset($_SESSION["message"]) && !empty($_SESSION["message"])) {
                                echo '<div class="alert alert-info alert-dismissible">
                                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                     <strong>Success! </strong>'.$_SESSION["message"].'</div>';
                            }
                            ?>
                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">

                                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                        <tr>
                                            <th>Restaurant Name</th>
                                            <th>Meal Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $dealsquery = "select m.id as mealid,u.name as restaurantname,m.name as mealname,m.description as mealdescription,m.image as mealimage from meals m , users u where u.id=m.restaurant_id and m.is_deleted=0 and u.is_deleted=0";
                                        $dealsquery_result = mysqli_query($conn, $dealsquery);
                                        $count = mysqli_num_rows($dealsquery_result);
                                        if ($count) {
                                            while ($row = mysqli_fetch_assoc($dealsquery_result)) {
                                                echo '<tr>
                                            <td>' . $row["restaurantname"] . '</td>
                                            <td>' . $row["mealname"] . '</td>
                                            <td>' . $row["mealdescription"] . '</td>
                                            <td><img height="60" width="60" class="img-thumbnail" src="'.imageurl($row["mealimage"]).'"></td>
                                            <td>
                                            <a href="view.php?id='.$row["mealid"].'" class="btn btn-warning">View</a>
                                            <a href="edit.php?id='.$row["mealid"].'" class="btn btn-info">Edit</a>
                                            <a href="delete.php?id='.$row["mealid"].'" class="btn btn-danger">Delete</a>
                                            </td>
                                                  </tr>';
                                            }
                                        } else {
                                            echo '<tr>
                                            <td style="display: none;"></td>
                                            <td style="display: none;"></td>
                                            <td colspan="5" class="norecordfound-table-alignment">No Record Found</td>
                                            <td style="display: none;"></td>
                                            <td style="display: none;"></td>
                                                  </tr>';
                                        }
                                        ?>

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Restaurant Name</th>
                                            <th>Meal Name</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- File export table -->

        </div>
    </div>
</div>
<?php include("../footer.php"); ?>

</body>
</html>