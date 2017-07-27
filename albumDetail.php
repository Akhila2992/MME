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
$albumid= $_GET['id'];
 $statement = $db->prepare("Select song_id,song_name,song_file_path from as3995_info556_201602.mme_songs where song_album_id=:albumid");
    $statement->execute(array(':albumid'=>$albumid));
    $songAll=$statement->fetchAll(PDO::FETCH_NAMED);
    
    $song_id = array();
    $song_name = array();
    $song_path = array();
    for($j=0;$j<count($songAll);$j++)
    {
         $song_id[$j]=$songAll[$j]['song_id'] ; 
         $song_name[$j]=$songAll[$j]['song_name'] ; 
         $song_path[$j]=$songAll[$j]['song_file_path'] ;
    }
    
    $_SESSION['song_id']=$song_id;
    $_SESSION['song_name']=$song_name;
    $_SESSION['song_path']=$song_path;
   header('Location: /~as3995/MME/song.php');
     
    exit();
?>  