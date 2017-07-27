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

$playListID = $_GET['plid'];

$statement = $db->prepare("Select song_id from as3995_info556_201602.mme_playlist_song_mapping where playlist_id="
        . "$playListID");

    $statement->execute();
    $userRow=$statement->fetchAll(PDO::FETCH_COLUMN);

    echo count($userRow);
    if(count($userRow)>0){
    $songid = implode(',',$userRow);
    $statmentforsongs =$db->prepare("Select song_id,song_name from as3995_info556_201602.mme_songs where song_id NOT IN (".$songid.")");
    
    }
    else {
        $statmentforsongs = $db->prepare("Select song_id,song_name from as3995_info556_201602.mme_songs");
    }
    

  $statmentforsongs->execute();
  $userRowSongs=$statmentforsongs->fetchAll(PDO::FETCH_NAMED);
  echo count($userRowSongs);
  $song_id = array();
  $song_name = array();
 for($j=0;$j<count($userRowSongs);$j++)
  {
       $song_id[$j]=$userRowSongs[$j]['song_id'] ; 
       $song_name[$j]=$userRowSongs[$j]['song_name'] ; 
   }
    
   
   $_SESSION['plid']=$playListID;
   $_SESSION['songlist_id']=$song_id;
   $_SESSION['songlist_name']=$song_name;
    
    
    header('Location: /~as3995/MME/songList.php');	
    exit();
    
?>