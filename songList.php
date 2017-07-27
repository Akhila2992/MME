<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
$currentid = $_SESSION['plid'];

?>
<html>
    <head>
        <title>Add SONG-Music Made Eazy!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="common.css" media="screen" />
    </head>
    <body>
        <div class="container">
            <form action="addSongs.php">
        <?php 
           
           $song_id = $_SESSION['songlist_id'];
           $song_name = $_SESSION['songlist_name'];
      
     for ($i = 0; $i < count($song_id); $i++) 
        {
             $key=$song_id[$i];
             $value=$song_name[$i];
         
         echo "<input type=".radio." name=songId value=".$key.">".$value."<br>";
            
        }
        ?>
       <button type="submit"> Add</button>
       </form>
        </div>
    </body>
</html>
