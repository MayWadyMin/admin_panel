<?php 
    require_once('common.php');

    if(isset($_POST['login'])){

        $email=$_POST["email"];
        $password=$_POST["password"];
        $commons = new Common;
        $admin = $commons->getRow("SELECT * FROM account WHERE account_email='$email'");
        $staff = $commons->getRow("SELECT * FROM employee WHERE employee_email='$email'");

        if (password_verify($password,$admin['password'])){
            setSession("admin_name",$admin['account_name']);
            setSession("admin_email",$email);
            setSession("account_id",$admin['account_id']);
            header("location: admin/index.php");
        } elseif (password_verify($password,$staff['employee_password'])){
            // setSession("employee_id",$staff['employee_id']);
            setSession("employee_name",$staff['employee_name']);
            setSession("employee_email",$email);
            setSession("employee_password",$password);
            // setSession("company",$staff['company']);
            // setSession("department",$staff['department']);
            // setSession("employee_address",$staff['employee_address']);
            // setSession("phone_no",$staff['phone_no']);
            header("location: admin/employee/index.php");
        } else{
            // setSession("error_login","Wrong Password!");
            // header("location: login.php");
            // $error = "Wrong Email and Password error";
            // require_once('login.php');
            $_SESSION['error_login']="Email and Password does not incorrect!";
        }

    }

 ?>