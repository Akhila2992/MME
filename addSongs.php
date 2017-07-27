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

$currentid = $_SESSION['plid'];
$songid= $_GET['songId'];
$statement = "insert into as3995_info556_201602.mme_playlist_song_mapping(Playlist_ID,Song_ID) values "
        . " ($currentid,$songid)";
$n=$db->exec($statement);

header('Location: /~as3995/MME/playListDetail.php?id='.$currentid);
?>