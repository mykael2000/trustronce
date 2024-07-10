<?php
include "includes/header.php";

$userid = $_GET['id'];

if (isset($_POST['yes'])) {
    $sqldel = "DELETE FROM clients WHERE id = '$userid'";
    $querydel = mysqli_query($conn, $sqldel);

    $sqlpay = "DELETE FROM deposit WHERE client_id = '$userid'";
    $querypay = mysqli_query($conn, $sqlpay);

    $sqlb = "DELETE FROM withdrawals WHERE client_id = '$userid'";
    $queryb = mysqli_query($conn, $sqlb);

    echo "<script>alert('user deleted successfully')</script>";
    header("refresh: 1; url=editusers.php");
}
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            CPT user Delete

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Home</a></li>
            <li class="active">Delete user</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Delete user</h3>
                        <div class="box-tools">
                            <div class="input-group">
                                <input type="text" name="table_search" class="form-control input-sm pull-right"
                                    style="width: 150px;" placeholder="Search" />
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>



                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>

                            <tr>


                                <td>Are you sure you want to delete this user?</td>
                                <form action="" method="post">
                                    <td><a href="userdepo.php" type="submit"
                                            class="btn btn-block btn-success btn-xs">NO</a></td>
                                </form>
                                <form action="" method="post">
                                    <td><button type="submit" name="yes"
                                            class="btn btn-block btn-danger btn-xs">YES</button></td>
                                </form>



                            </tr>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->


<?php
include "includes/footer.php";
?>