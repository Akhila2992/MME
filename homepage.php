<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$dsn = "mysql:host=twilbury.cs.drexel.edu;dbName=as3995_info556_201602";
$username = "as3995";
$password = "xjzmsxnss";
$db = new PDO($dsn,$username,$password);
$user = $_POST['username'];
$pass = $_POST['pass'];



$stmt = $db->prepare("SELECT * FROM as3995_info556_201602.mme_user WHERE mail_id=:uname AND password=:umail LIMIT 1");
          $stmt->execute(array(':uname'=>$user, ':umail'=>$pass));
          $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
          if($stmt->rowCount() ==1)
          {
            $_SESSION['profileName']=$userRow['user_profile_name'];
        
            $_SESSION['userID']=$user;
            header('Location: /~as3995/MME/home.php');	
                exit();
          }
          else {
              header('Location: /~as3995/MME/error.html');	
                exit();
          }
       
?>