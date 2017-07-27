<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Welcome to Music Made Eazy !</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="common.css" media="screen" />
    </head>
    <body>
        
        
        <div class="container">
            <h1>
                <?php echo "Welcome " .$_SESSION['profileName']."!" ?>
            </h1>
            <form action="action.php" method="GET">
                <div class="clearfix">
                    <a href="createPlaylist.html"> Create PlayList</a>
                <button type="submit" id="playlist" name="action" value="playlist">Play List</button>
                <button type="submit" id="Song" name="action" value="Song">Song</button>
                <button type="submit" id="genre" name="action" value="genre">Genre</button>
                <button type="submit" id="album" name="action" value="album">Album</button>
                <button type="submit" id="artist" name="action" value="artist">Artist</button>
                </div>
                
               
            </form>
            
    </body>
</html>
        