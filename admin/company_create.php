<?php 
    include_once "include/admin_header.php"; 
    include_once "function/create_company.php";
?>


    <!-- Navigation -->
    <?php include_once "include/admin_nav.php"; ?>

 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            New Company
                        </h1>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" required="required">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" required="required">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" id="address" rows="3" required="required"></textarea>
                            </div>
                          
                            <button type="submit" name="add-company" class="btn btn-primary">Submit</button>
                            <button onclick="history.go(-1);" class="btn btn-primary">Back </button>
                        </form> 
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->
<br><br>
        </div>
        <!-- /#page-wrapper -->

    <!-- footer -->
    <?php include_once "include/admin_footer.php"; ?>
