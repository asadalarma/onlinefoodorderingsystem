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
                                    <h4 class="card-title">Deals Edit</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                                    <div class="heading-elements">
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
                                <div class="card-body">
                                    <form method="post" action="update.php" accept-charset="UTF-8" enctype="multipart/form-data">
                                    <input type="hidden" name="userid" value="<?php echo $id; ?>">
                                       <?php $row = getDealsRecord($conn,$id); ?>
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="name">Name</label>  <span class="required">*</span>
                                                        <input class="form-control border-primary" placeholder="Name" name="name" type="text" id="name" value="<?php echo isset($row["name"]) ? $row["name"] : null; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="descripton">Description</label>
                                                        <textarea class="form-control border-primary" placeholder="Description" name="description" type="text" id="description"><?php echo isset($row["description"]) ? $row["description"] : null; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset class="form-group">
                                                        <label for="basicInputFile">File</label>
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" name="inputFile" id="inputFile">
                                                            <label class="custom-file-label" for="inputFile">Choose file</label>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <a href="index.php" class="btn btn-warning mr-1"><i class="ft-x"></i> Cancel</a>
                                            <button type="submit" name="editdeals" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save</button>
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