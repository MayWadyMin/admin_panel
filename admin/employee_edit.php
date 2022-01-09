<?php 
    include_once "include/admin_header.php"; 

    include_once "function/edit_employee.php";
?>

    <!-- Navigation -->
    <?php include_once "include/admin_nav.php"; ?>

    

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit Employee
                        </h1>
                    </div>

                    <div class="col-md-10 col-md-offset-1">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname" required value="<?php echo $fname ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" required value="<?php echo $lname ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="staffId">StaffID</label>
                                    <input type="text" name="staffId" class="form-control" id="staffId" required value="<?php echo $id ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required value="<?php echo $email ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="tel"  pattern="(09|95)?[0-9]{10}" name="phone" class="form-control" id="phone" required value="<?php echo $phone ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="company">Company</label>
                                    <select name="company" class="form-control" id="company" required>
                                        <option value="">Select Company</option>
                                        <?php
                                            $datas = $commons->getAllRow("SELECT company.company_id,company.company_name FROM company");
                                            foreach ($datas as $key => $data): 
                                        ?>
                                                <option value="<?php echo $data['company_id']; ?>"<?php if($result['company'] == $data['company_id']) echo 'selected="selected"'; ?>><?php echo $data['company_name']; ?></option>
                                        <?php
                                            endforeach;	
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" class="form-control" id="department" required value="<?php echo $department ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required value="<?php echo $password ?>">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" id="address" required value="<?php echo $address ?>">
                                <!-- <textarea name="address" class="form-control" id="address" rows="3" required="required"></textarea> -->
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" name="update-employee" class="btn btn-primary">Update</button>
                                <button onclick="history.go(-1);" class="btn btn-primary">Back </button>
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
