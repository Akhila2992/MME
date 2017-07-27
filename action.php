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



function getPlaylists(){
    global $db;
     
      $user = $_SESSION['userID']; 
     
    $statement = $db->prepare("select playlist_name , playlist_id from as3995_info556_201602.mme_playlist"
            . " where "
            . "mail_id= '".$user."'");
    $statement->execute();
     $userRow=$statement->fetchAll(PDO::FETCH_NAMED);
    return $userRow;
}

function getSongs()
{
    global $db;
    $statement = $db->prepare("Select song_id,song_name,song_file_path from as3995_info556_201602.mme_songs");
    $statement->execute();
    $userRow=$statement->fetchAll(PDO::FETCH_NAMED);
    return $userRow;
}


function getGenres()
{
     global $db;
    $statement = $db->prepare("Select genre_id,genre_name from as3995_info556_201602.mme_genre");
    $statement->execute();
    $userRow=$statement->fetchAll(PDO::FETCH_NAMED);
    return $userRow;
}

function getArtist()
{
    global $db;
    $statement = $db->prepare("Select Artist_ID,Artist_Name from as3995_info556_201602.mme_artist");
    $statement->execute();
    $userRow=$statement->fetchAll(PDO::FETCH_NAMED);
    return $userRow;
}

function getAlbums()
{
    global $db;
    $statement = $db->prepare("Select Album_ID,Album_Name from as3995_info556_201602.mme_album");
    $statement->execute();
    $userRow=$statement->fetchAll(PDO::FETCH_NAMED);
    return $userRow;
}

$value = $_GET['action'];



if($value=="playlist"){
  
    $listAll= getPlaylists();
   $playlist_id = array();
   $playlist_name = array();
    for($j=0;$j<count($listAll);$j++)
   {
        $playlist_id[$j]=$listAll[$j]['playlist_id'] ; 
        $playlist_name[$j]=$listAll[$j]['playlist_name'] ; 
    }
    
   $_SESSION['playlist_id']=$playlist_id;
    $_SESSION['playlist_name']=$playlist_name;
    header('Location: /~as3995/MME/playList.php');	
    exit();
    
}
 if($value=="Song"){
    $songAll = getSongs();
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
}
else if($value=="genre"){
   $genreAll = getGenres();
  
   $genre_id = array();
    $genre_name = array();
    for($j=0;$j<count($genreAll);$j++)
    {
         $genre_id[$j]=$genreAll[$j]['genre_id'] ; 
         $genre_name[$j]=$genreAll[$j]['genre_name'] ; 
    }
    
    $_SESSION['genre_id']=$genre_id;
    $_SESSION['genre_name']=$genre_name;
   header('Location: /~as3995/MME/genre.php');
     
    exit();
    
}
else if($value=="album"){
   $albumAll = getAlbums();
   $album_id = array();
    $album_name = array();
    for($j=0;$j<count($albumAll);$j++)
    {
         $album_id[$j]=$albumAll[$j]['Album_ID'] ; 
         $album_name[$j]=$albumAll[$j]['Album_Name'] ; 
    }
    
    $_SESSION['album_id']=$album_id;
    $_SESSION['album_name']=$album_name;
   header('Location: /~as3995/MME/album.php');
     
    exit();
    
}
else{
    $artistAll = getArtist();
    
     $artist_id = array();
     $artist_name = array();
    for($j=0;$j<count($artistAll);$j++)
    {
         $artist_id[$j]=$artistAll[$j]['Artist_ID'] ; 
         $artist_name[$j]=$artistAll[$j]['Artist_Name'] ; 
    }
    
    $_SESSION['artist_id']=$artist_id;
    $_SESSION['artist_name']=$artist_name;
   header('Location: /~as3995/MME/artist.php');
     
    exit();
    
}
?>


