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
        <title>Album-Music Made Eazy!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="common.css" media="screen" />
    </head>
    <body>
        <div class="container">
        <?php 
           
           $album_id = $_SESSION['album_id'];
           $album_name = $_SESSION['album_name'];
       
     for ($i = 0; $i < count($album_id); $i++) 
        {
             $key=$album_id[$i];
             $value=$album_name[$i];
              echo "<p><a href='albumDetail.php?id=$key'>$value</a></p>";   
        }
        ?>
        </div>
    </body>
</html>
