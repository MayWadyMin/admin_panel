<?php 
    include_once "include/admin_header.php"; 
    include_once "function/edit_company.php";
?>

    <!-- Navigation -->
    <?php include_once "include/admin_nav.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Company
                        </h1>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required="required" value="<?php echo $name ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required="required" value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="address">Address</label>
                                    <input type="address" name="address" class="form-control" id="address" required="required" value="<?php echo $address ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <button type="submit" name="update-company" class="btn btn-primary">Update</button>
                                    <button onclick="history.go(-1);" class="btn btn-primary">Back </button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <!-- footer -->
    <?php include_once "include/admin_footer.php"; ?>
