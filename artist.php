<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
   session_start();
?>
<html>
    <head>
        <title>Artist-Music Made Eazy!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="common.css" media="screen" />
    </head>
    <body>
        <div class="container">
        <?php 
           
           $artist_id = $_SESSION['artist_id'];
           $artist_name = $_SESSION['artist_name'];
       
     for ($i = 0; $i < count($artist_id); $i++) 
        {
             $key=$artist_id[$i];
             $value=$artist_name[$i];
              echo "<p><a href='artistDetail.php?id=$key'>$value</a></p>";
            
        }
        ?>
        </div>
    </body>
</html>