<?php 
    require_once('common.php');
    if(isset($_POST['add-company'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $commons = new Common;
        $results = $commons->insertData("INSERT INTO company (company_name, company_email, company_address) VALUES (?,?,?)",[$name, $email, $address]);
        // $sql = "INSERT INTO company (company_name,company_email,company_address) VALUES ('$name','$email','$address')";
        // $result = mysqli_query($con,$sql);
        // confirm_query($result);
        
        header("Location:company_list.php");
        echo "<script>alert('Successfully')</script>";
        
    }
?>