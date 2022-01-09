<?php 
    require_once('common.php');
    $commons = new Common;
    if(isset($_POST['add-employee'])){
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
        
        $results = $commons->insertData("INSERT INTO employee (employee_id, employee_name, employee_email,company,department,employee_address,phone_no,employee_password) VALUES (?,?,?,?,?,?,?,?)",[$staffId, $name, $email, $company, $department, $address, $phone, $hash_pw ]);
        // $sql = "INSERT INTO employee (employee_id,employee_name,employee_email,company,department,employee_address,phone_no,employee_password) VALUES ('$staffId','$name','$email','$company','$department','$address','$phone','$hash_pw')";
        // $result = mysqli_query($con,$sql);
        // confirm_query($result);
        
        header("Location:employee_list.php");
        echo "<script>alert('Successfully')</script>";
        
    }
    ?>