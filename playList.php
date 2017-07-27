<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<html>
    <head>
        <title>Playlist-Music Made Eazy!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="common.css" media="screen" />
    </head>
    <body>
        <div class="container">
        <?php 
                
           $playlist_id = $_SESSION['playlist_id'];
           $playlist_name = $_SESSION['playlist_name'];
       
     for ($i = 0; $i < count($playlist_id); $i++) 
        {
             $key=$playlist_id[$i];
             $value=$playlist_name[$i];
              echo "<p><a href='playListDetail.php?id=$key'>$value</a></p>";
            
        }
        ?>
        </div>
    </body>
</html>
