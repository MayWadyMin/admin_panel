<?php 
        require_once('common.php');
        
       
        // // Insert Employee

        // if(isset($_POST['add-employee'])){
        //     $fname = escape($_POST['fname']);
        //     $lname = escape($_POST['lname']);
        //     $name = $fname . " " . $lname;
        //     $staffId = escape($_POST['staffId']);
        //     $email = escape($_POST['email']);
        //     $phone = escape($_POST['phone']);
        //     $company = escape($_POST['company']);
        //     $department = escape($_POST['department']);
        //     $password = escape($_POST['password']);
        //     $hash_pw = password_hash($password, PASSWORD_DEFAULT);
        //     $address = escape($_POST['address']);

        //     $sql = "INSERT INTO employee (employee_id,employee_name,employee_email,company,department,employee_address,phone_no,employee_password) VALUES ('$staffId','$name','$email','$company','$department','$address','$phone','$hash_pw')";
        //     $result = mysqli_query($con,$sql);
        //     confirm_query($result);
        //     echo "<script>alert('Successfully')</script>";
            
        // }


        // insert employee
        function insertStaff($staffId,$name,$email,$company,$department,$address,$phone,$hash_pw, $db_con){
            try{
            $stmt = $db_con->prepare("INSERT INTO employee(employee_id,employee_name,employee_email,company,department,employee_address,phone_no,employee_password) VALUES(:staffId, :name, :email, :company, :department, :address, :phone, :hash_pw)");
            $stmt->bindparam(":staffId",$staffId);
            $stmt->bindparam(":name",$name);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":company",$company);
            $stmt->bindparam(":department",$department);
            $stmt->bindparam(":address",$address);
            $stmt->bindparam(":phone",$phone);
            $stmt->bindparam(":hash_pw",$hash_pw);
            $stmt->execute();
            return true;
            }catch(PDOException $e){
            echo $e->getMessage(); 
            return false;
            }
        }

     //select employee id
     function getStaff($edit_id,$db_con){
        $stmt = $db_con->prepare("SELECT employee.id,employee.employee_id,employee.employee_name,employee.employee_email,company.company_name,employee.department,employee.employee_address,employee.phone_no,employee.employee_password FROM employee INNER JOIN company ON employee.company=company.company_id WHERE id=:edit_id");
        $stmt->execute(array(":edit_id"=>$edit_id));
        $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
     }
    
    //  select employee
    function getAllStaff($db_con){
        $stmt = $db_con->prepare("SELECT employee.id,employee.employee_id,employee.employee_name,employee.employee_email,company.company_name,employee.department,employee.employee_address FROM employee INNER JOIN company ON employee.company=company.company_id");
        $stmt->execute();
        $editRow=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $editRow;
    }

     //update employee
     function updateStaff($id,$fname,$lname,$email,$contact, $db_con){
        try{
           $stmt=$db_con->prepare("UPDATE tbl_users SET first_name=:fname, last_name=:lname, email_id=:email, contact_no=:contact WHERE id=:id ");
           $stmt->bindparam(":fname",$fname);
           $stmt->bindparam(":lname",$lname);
           $stmt->bindparam(":email",$email);
           $stmt->bindparam(":contact",$contact);
           $stmt->bindparam(":id",$id);
           $stmt->execute();
           
           return true; 
        }catch(PDOException $e){
           echo $e->getMessage(); 
           return false;
        }
     }

        //delete employee
        function deleteStaff($del_id, $db_con){
            $stmt = $db_con->prepare("DELETE FROM employee WHERE id=:del_id");
            $stmt->bindparam(":del_id",$del_id);
            $stmt->execute();
            return true;
        }


        // //  Delete Employee

        // if(isset($_GET['del_id'])){
        //     $del_id = $_GET['del_id'];
        //     $sql = "DELETE FROM employee WHERE id=$del_id";
        //     $result = mysqli_query($con,$sql);
        //     confirm_query($result);
        //     echo "<script>alert('Successfully!')</script>";
        // }



        // // Update Employee
     ?>