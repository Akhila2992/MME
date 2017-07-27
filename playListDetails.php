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
        <title>Song-Music Made Eazy!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="common.css" media="screen" />
    </head>
    <body>
        <div class="container">
           
            <?php
                $current_id =$_SESSION['current_plid'];
                $song_id = $_SESSION['song_id'];
                $song_name = $_SESSION['song_name'];
                $song_path = $_SESSION['song_path'];
                $current_id =$_SESSION['current_plid'];
                echo "<p><a href='addSongList.php?plid=$current_id'>ADD SONGS</a></p>";
                for ($i = 0; $i < count($song_id); $i++) 
                   {
                        $key=$song_id[$i];
                        $value=$song_name[$i];
                        $path = $song_path[$i];
                echo "<b>".$value."</b> <br>";         
                echo "<audio controls>";
                echo "<source src= "."/~as3995/MME/".$path." type=audio/mpeg>";
  
             echo"</audio>";
                echo "<br>";
                   }

            
            ?>
        </div>
    </body>
</html