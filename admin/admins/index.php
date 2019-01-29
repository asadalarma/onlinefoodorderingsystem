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
                                <h4 class="card-title">Admins</h4>
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
                                <div class="card-body card-dashboard">

                                    <table class="table table-striped table-bordered file-export">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $adminsquery = "select * from users where user_type='admin' and id not in(".$_SESSION["user_id"].") and is_deleted=0";
                                        $adminsquery_result = mysqli_query($conn, $adminsquery);
                                        $count = mysqli_num_rows($adminsquery_result);
                                        if ($count) {
                                            while ($row = mysqli_fetch_assoc($adminsquery_result)) {
                                                echo '<tr>
                                            <td>' . $row["name"] . '</td>
                                            <td>' . $row["email"] . '</td>
                                            <td>' . $row["address"] . '</td>
                                            <td>' . $row["phone"] . '</td>
                                            <td>
                                            <a href="view.php?id='.$row["id"].'" class="btn btn-warning">View</a>
                                            <a href="edit.php?id='.$row["id"].'" class="btn btn-info">Edit</a>
                                            <a href="delete.php?id='.$row["id"].'" class="btn btn-danger">Delete</a>
                                            </td>
                                                  </tr>';
                                            }
                                        } else {
                                            echo '<tr>
                                            <td colspan="5" class="norecordfound-table-alignment">No Record Found</td>
                                                  </tr>';
                                        }
                                        ?>

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Phone</th>
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