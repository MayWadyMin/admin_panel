<?php 
require_once('connection.php');

   class Common{
      public $pdo;

      function __construct()
      {
         $this->pdo = new PDO(DSN, ROOT, ROOT_PASS);
      }


      // function getCount($query, $params = [])
      // {
      //    // return $query;die;
      //    $stmt1 = $this->pdo->prepare($query);
      //    $stmt1->execute($params);
      //    $data = $stmt1->fetchColumn();
      //    return $data;
      // }

      function getRow($query, $params = [])
      {
         $stmt1 = $this->pdo->prepare($query);
         $stmt1->execute($params);
         $data = $stmt1->fetch(PDO::FETCH_ASSOC);
         return $data;
      }

      function getAllRow($query, $params = [])
      {
         $stmt1 = $this->pdo->prepare($query);
         $stmt1->execute($params);
         $data = $stmt1->fetchAll(PDO::FETCH_ASSOC);
         return $data;
      }

      function insertData($query, $params = [])
      {
         try{
            $stmt1 = $this->pdo->prepare($query);
            $stmt1->execute($params);
            // $data = $stmt1->fetch(PDO::FETCH_ASSOC);
            // return $data;
            return true; 
         }catch(PDOException $e){
            echo $e->getMessage(); 
            return false;
         }
      }

      function deleteData($query, $params = [])
      {
         try{
            $stmt1 = $this->pdo->prepare($query);
            $stmt1->execute($params);
         // $data = $stmt1->fetch(PDO::FETCH_ASSOC);
         // return $data;
            return true; 
         }catch(PDOException $e){
            echo $e->getMessage(); 
            return false;
         }
      }

      function updateData($query, $params = [])
      {
         try{
            $stmt1 = $this->pdo->prepare($query);
            $stmt1->execute($params);
            return true; 
         }catch(PDOException $e){
            echo $e->getMessage(); 
            return false;
         }
      }
   
   //    function loginAdmin($email){
   //       $multi=array();
   //       //$sql = "SELECT * FROM account, employee WHERE account_email = :email OR employee_email=:email";
   //       $sql = $this->db_con->prepare("SELECT * FROM account, employee WHERE account_email = :email OR employee_email=:email");
   //       $sql->execute(array(":email"=>$email));
   //       $row=$sql->fetch(PDO::FETCH_ASSOC);
   //       return $row;
   //    }

   //    function loginStaff($email){
   //       $multi=array();
   //       //$sql = "SELECT * FROM account, employee WHERE account_email = :email OR employee_email=:email";
   //       $sql = $this->db_con->prepare("SELECT * FROM employee WHERE employee_email=:email");
   //       $sql->execute(array(":email"=>$email));
   //       $row=$sql->fetch(PDO::FETCH_ASSOC);
   //       return $row;
   //    }

   //   // checkemil
   //   public function checkEmail($email){
   //       $sql = $this->db_con->prepare("SELECT * FROM account WHERE account_email=:email");
   //       $sql->execute(array(":email"=>$email));
   //       $row=$sql->fetch(PDO::FETCH_ASSOC);
   //       return $row;
   //   }

 
      
 

 
}

	

 ?>