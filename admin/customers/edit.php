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
                                    <h4 class="card-title">Customers Edit</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>

                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <form method="post" action="update.php" accept-charset="UTF-8">
                                    <input type="hidden" name="userid" value="<?php echo $id; ?>">
                                       <?php $row= getUserRecord($conn,$id); ?>
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
                                                        <label for="email">Email</label>  <span class="required">*</span>
                                                        <input class="form-control border-primary" placeholder="Email" name="email" type="text" id="email" value="<?php echo isset($row["email"]) ? $row["email"] : null; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>  <span class="required">*</span>
                                                        <input class="form-control border-primary" placeholder="Address" name="address" type="text" id="address" value="<?php echo isset($row["address"]) ? $row["address"] : null; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Phone</label>  <span class="required">*</span>
                                                        <input class="form-control border-primary" placeholder="Phone" name="phone" type="text" maxlength="13" id="tel-input-3" pattern="^\+[0-9]{4}[0-9]{7}[0-9]{1}$" title="The phone must be in this format +920001234567" value="<?php echo isset($row["phone"]) ? $row["phone"] : null; ?>" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <a href="index.php" class="btn btn-warning mr-1"><i class="ft-x"></i> Cancel</a>
                                            <button type="submit" name="editcustomers" class="btn btn-primary"><i class="fa fa-check-square-o"></i> Save</button>
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