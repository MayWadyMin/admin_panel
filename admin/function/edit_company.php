<?php 
    require_once('common.php');
    $commons = new Common;
    if(isset($_GET['edit_id'])){
        $edit_id = $_GET['edit_id'];
        // $sql = "SELECT * FROM company WHERE company_id=$edit_id";
        // $result = mysqli_query($con,$sql);
        // confirm_query($result);
        $result = $commons->getRow("SELECT * FROM company WHERE company_id='$edit_id'");
        $name=$result['company_name'];
        $email=$result['company_email'];
        $address=$result['company_address'];
    
        if(isset($_POST['update-company'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $address = $_POST['address'];

            // $sql = "UPDATE company SET company_name='$name',company_email='$email',company_address='$address' WHERE company_id=$edit_id";
            //     $result = mysqli_query($con,$sql);
            //     confirm_query($result);
            $result = $commons->updateData("UPDATE company SET company_name = ?, company_email = ?, company_address = ? WHERE company_id = ?", [$name, $email, $address, $edit_id]);
            if($result) {
                
                header ("location: company_list.php");
                echo "<script>alert('Successfully')</script>";
            }
            else {
                echo "<script>alert('Failed')</script>";
        
            }
            // header("Location:company_list.php");
            // echo "<script>alert('Successfully')</script>";
            
        }
    }
?>