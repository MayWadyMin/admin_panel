<?php 
    require_once('common.php');
    $commons = new Common;
    if(isset($_GET['del_id'])){
        $del_id = $_GET['del_id'];
        $results = $commons->getRow("DELETE FROM company WHERE company_id='$del_id'");
        // $sql = "DELETE FROM company WHERE company_id=$del_id";
        // $result = mysqli_query($con,$sql);
        // confirm_query($result);
        echo "<script>alert('Successfully!')</script>";
    }

?>