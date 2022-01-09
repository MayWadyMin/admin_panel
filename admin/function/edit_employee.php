<?php 
    require_once('common.php');
    $commons = new Common;
    if(isset($_GET['edit_id'])){
        $edit_id = $_GET['edit_id'];
        // $sql = "SELECT employee.id,employee.employee_id,employee.employee_name,employee.employee_email,company.company_name,employee.department,employee.employee_address,employee.phone_no,employee.employee_password FROM employee INNER JOIN company ON employee.company=company.company_id WHERE id=$edit_id";
        // $result = mysqli_query($con,$sql);
        // confirm_query($result);
        // $result = $commons->getRow("SELECT employee.id,employee.employee_id,employee.employee_name,employee.employee_email,company.company_name,employee.department,employee.employee_address,employee.phone_no,employee.employee_password FROM employee INNER JOIN company ON employee.company=company.company_id WHERE id='$edit_id'");
        $result = $commons->getRow("SELECT * FROM employee WHERE id='$edit_id'");

        $id=$result['employee_id'];
        $name=$result['employee_name'];
        $parts = explode(" ", $name);
        if(count($parts) > 1) {
            $lname = array_pop($parts);
            $fname = implode(" ", $parts);
        }
        else
        {
            $fname = $name;
            $lname = " ";
        }
        $email=$result['employee_email'];
        $company=$result['company'];
        $department=$result['department'];
        $address=$result['employee_address'];
        $phone=$result['phone_no'];
        $password=$result['employee_password'];

        

        if(isset($_POST['update-employee'])){
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $name = $fname . " " . $lname;
            $staffId = $_POST['staffId'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $company = $_POST['company'];
            $department = $_POST['department'];
            $password = $_POST['password'];
            $hash_pw = password_hash($password, PASSWORD_DEFAULT);
            $address = $_POST['address'];
            

            // $sql = "UPDATE employee SET employee_id='$staffId',employee_name='$name',employee_email='$email',company='$company',department='$department',employee_address='$address',phone_no='$phone',employee_password='$hash_pw' WHERE id=$edit_id";
            // $result = mysqli_query($con,$sql);
            // confirm_query($result);

            // updateStaff($id,$fname,$lname,$email,$contact, $db_con);
            $result = $commons->updateData("UPDATE employee SET employee_id=?, employee_name=?, employee_email=?, company=?, department=?, employee_address=?, phone_no=?, employee_password=? WHERE id = ?", [$staffId, $name, $email, $company, $department, $address, $phone, $hash_pw, $edit_id]);
            if($result) {
                
                header ("location: employee_list.php");
                echo "<script>alert('Successfully')</script>";
            }
            else {
                echo "<script>alert('Failed')</script>";
        
            }
            // echo "<script>alert('Successfully')</script>";
            // header("Location:employee_list.php");
            
        }
    }
?>