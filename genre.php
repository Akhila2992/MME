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
        <title>Genre-Music Made Eazy!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="common.css" media="screen" />
    </head>
    <body>
        <div class="container">
        <?php 
           
           $genre_id = $_SESSION['genre_id'];
           $genre_name = $_SESSION['genre_name'];
       
     for ($i = 0; $i < count($genre_id); $i++) 
        {
             $key=$genre_id[$i];
             $value=$genre_name[$i];
              echo "<p><a href='genreDetail.php?id=$key'>$value</a></p>";
            
        }
        ?>
        </div>
    </body>
</html>
