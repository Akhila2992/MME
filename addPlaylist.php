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

$name = $_POST['playlistName'];
$desc = $_POST['playlistdesc'];
$userId = $_SESSION['userID'];

$sql = "insert into as3995_info556_201602.mme_playlist(playlist_name,playlist_desc,mail_id) values"
        . " ('$name','$desc','$userId')";
echo $sql;
$n=$db->exec($sql);
header('Location: /~as3995/MME/action.php?action=playlist');	

?>