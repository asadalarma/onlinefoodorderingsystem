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

            <section>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Meal Add</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                                    <div class="heading-elements">
                                    </div>
                                </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form method="post" action="doadd.php" accept-charset="UTF-8" enctype="multipart/form-data">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="restaurant">Name</label>  <span class="required">*</span>
                                                        <select class="form-control border-primary" name="restaurant" id="restaurant" required>
                                                            <?php
                                                            $restaurantquery = "select * from users where is_deleted=0 and user_type='restaurant'";
                                                            $restaurantquery_result = mysqli_query($conn, $restaurantquery);
                                                            $count = mysqli_num_rows($restaurantquery_result);
                                                            if ($count) {
                                                                echo '<option value="">Please Select</option>';
                                                                while($row = mysqli_fetch_assoc($restaurantquery_result)){
                                                                    echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                                                                }
                                                            }else {
                                                                echo '<option value="">Please Register Restaurant First</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="deal">Assign Deals</label>
                                                        <select class="deals-placeholder-multiple form-control border-primary" name="assigndeals[]" id="assigndeals"  multiple="multiple">
                                                            <?php
                                                            $dealsquery = "select * from deals where is_deleted=0";
                                                            $dealsquery_result = mysqli_query($conn, $dealsquery);
                                                            $count = mysqli_num_rows($dealsquery_result);
                                                            if ($count) {
                                                                while($row = mysqli_fetch_assoc($dealsquery_result)){
                                                                    echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                                                                }
                                                            }else {
                                                                echo '<option value="">Please Register Deals First</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>  <span class="required">*</span>
                                                        <input class="form-control border-primary" placeholder="Name" name="name" type="text" id="name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>  <span class="required">*</span>
                                                        <textarea class="form-control border-primary" placeholder="Description" name="description" id="description" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <label for="basicInputFile">File</label> <span class="required">*</span>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="inputFile" id="inputFile" required>
                                                            <label class="custom-file-label" for="inputFile">Choose file</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <a href="index.php" class="btn btn-warning mr-1"><i class="ft-x"></i> Cancel</a>
                                            <button type="submit" name="addmeal" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save</button>
                                        </div>
                                    </form>
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