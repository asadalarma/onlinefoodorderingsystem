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

                            <div class="card-header">
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
                                            $selectquery = "select * from users where id=$id and is_deleted=0";
                                            $selectquery_result = mysqli_query($conn, $selectquery);
                                            $count=mysqli_num_rows($selectquery_result);
                                            if($count){
                                               $row = mysqli_fetch_assoc($selectquery_result);
                                            }
                                            ?>
                                            <tr>
                                                <td class="width-200">Name</td>
                                                <td class="width-800"><?php echo (isset($row["name"]) ? $row["name"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Email</td>
                                                <td class="width-800"><?php echo (isset($row["email"]) ? $row["email"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Type</td>
                                                <td class="width-800"><?php echo (isset($row["user_type"]) ? $row["user_type"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Phone</td>
                                                <td class="width-800"><?php echo (isset($row["phone"]) ? $row["phone"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Url</td>
                                                <td class="width-800"><?php echo (isset($row["url"]) ? $row["url"] : null); ?></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Image</td>
                                                <td class="width-800"><img height="200" width="200" class="img-thumbnail" src="<?php echo (isset($row["image"]) ? imageurl($row["image"]) : null); ?>"></td>
                                            </tr>
                                            <tr>
                                                <td class="width-200">Status</td>
                                                <td class="width-800">
                                                    <?php
                                                 echo $row["approval_status"] == 1 ?  '<div class="badge badge-info">Pending</div>' : ($row["approval_status"] == 2 ? '<div class="badge badge-success">Approved</div>' : '<div class="badge badge-danger">Not Approved</div>');
                                                    ?>

                                                </td>
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