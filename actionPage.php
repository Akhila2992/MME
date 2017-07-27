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

$email = $_GET['email'];
$pass = $_GET['pass'];
$userProfile = $_GET['userProfile'];

$sql = "insert into as3995_info556_201602.mme_user(mail_id, password, user_profile_name) values"
        . " ('$email','$pass','$userProfile')";

$n=$db->exec($sql);
header('Location: /~as3995/MME/login.html');	
exit();

?>