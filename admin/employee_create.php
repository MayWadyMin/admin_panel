<?php 
    include_once "include/admin_header.php";
    include_once "function/create_employee.php";

?>


    <!-- Navigation -->
    <?php include_once "include/admin_nav.php"; ?>

    <?php 
        // $commons = new Common;
        
     ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            New Employee
                        </h1>
                    </div>
                    <div class="col-md-10 col-md-offset-1">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fname">First Name</label>
                                    <input type="text" name="fname" class="form-control" id="fname" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">Last Name</label>
                                    <input type="text" name="lname" class="form-control" id="lname" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="staffId">StaffID</label>
                                    <input type="text" name="staffId" class="form-control" id="staffId" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="tel"  pattern="(09|95)?[0-9]{10}" name="phone" class="form-control" id="phone" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="company">Company</label>
                                    <select name="company" class="form-control" id="company" required>
                                        <option disabled selected>Select Company</option>
                                        <?php
                                            $results = $commons->getAllRow("SELECT company.company_id,company.company_name FROM company");
                                            foreach ($results as $key => $result): 
                               
                                                echo "<option value='". $result['company_id'] ."'>" .$result['company_name'] ."</option>";
                                            
                                            endforeach;
                                    
                                        ?>  
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="department">Department</label>
                                    <input type="text" name="department" class="form-control" id="department" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" id="address" rows="3" required="required"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <button type="submit" name="add-employee" class="btn btn-primary">Submit</button>
                                <button onclick="history.go(-1);" class="btn btn-primary">Back </button>
                            </div>
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
