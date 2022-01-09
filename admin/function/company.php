<?php 
        require_once('common.php');
        

        // insert company
        function insertCompany($name,$email,$address,$db_con){
            try{
            $stmt = $db_con->prepare("INSERT INTO company(company_name,company_email,company_address) VALUES(:name, :email, :address)");
            $stmt->bindparam(":name",$name);
            $stmt->bindparam(":email",$email);
            $stmt->bindparam(":address",$address);
            $stmt->execute();
            return true;
            }catch(PDOException $e){
            echo $e->getMessage(); 
            return false;
            }
        }

     //select company
     function getCompany($edit_id,$db_con){
        $stmt = $db_con->prepare("SELECT * FROM company WHERE company_id=:edit_id");
        $stmt->execute(array(":edit_id"=>$edit_id));
        $editRow=$stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
     }
    
    //  select all company
    function getAllCompany($db_con){
        $stmt = $db_con->prepare("SELECT company.company_id,company.company_name,company.company_email,company.company_address FROM company");
        $stmt->execute();
        $editRow=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $editRow;
    }

     //update company
     function updateCompany($name,$email,$address,$edit_id,$db_con){
        try{
           $stmt=$db_con->prepare("UPDATE company SET company_name=:name, company_email=:email, company_address=:address WHERE company_id=:edit_id ");
           $stmt->bindparam(":name",$name);
           $stmt->bindparam(":email",$email);
           $stmt->bindparam(":address",$address);
           $stmt->bindparam(":edit_id",$edit_id);
           $stmt->execute();
           
           return true; 
        }catch(PDOException $e){
           echo $e->getMessage(); 
           return false;
        }
     }

        //delete company
        function deleteCompany($del_id, $db_con){
            $stmt = $db_con->prepare("DELETE FROM company WHERE company_id=:del_id");
            $stmt->bindparam(":del_id",$del_id);
            $stmt->execute();
            return true;
        }

     ?>