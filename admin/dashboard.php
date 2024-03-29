<?php

include '../components/connect.php';
if (isset($_COOKIE['tutor_id'])) {
   $tutor_id = $_COOKIE['tutor_id'];
} else {
   $tutor_id = '';
}

$count_content = $conn->prepare("SELECT * FROM 'content' WHERE tutor_id = ?");
$total_contents = $count_content->rowCount();

$count_playlist = $conn->prepare("SELECT * FROM 'playlist' WHERE tutor_id = ?");
$total_playlists = $count_playlist->rowCount();

$count_like = $conn->prepare("SELECT * FROM 'like' WHERE tutor_id = ?");
$total_likes = $count_like->rowCount();

$count_comments = $conn->prepare("SELECT * FROM comments' WHERE tutor_id = ?");
$total_pcomments = $count_comments->rowCount();
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="../css/admin_style.css">
</head>

<body>

   <?php
   include '../components/admin_header.php';
   ?>

   <div class="dashboard">
      <h1 class="heading">Dashboard</h1>
         <div class="box">
            <h3>Welcome</h3>
            <p><?=$fetch_profile['name'];?></p>
            <a href="profile.php" class="btn">View Profile</a>
         </div>
         <div class="box">
            <h3><?=$total_contents;?></h3>
            <p>Contents Uploaded</p>
            <a href="add_content.php" class="btn">Add Content</a>
         </div>
         </div>
         <div class="box">
            <h3><?=$total_playlists;?></h3>
            <p>playlists Uploaded</p>
            <a href="add_playlist.php" class="btn">Add Playlist</a>
         </div>
         </div>
         <div class="box">
            <h3><?=$total_likes;?></h3>
            <p>Likes</p>
            <a href="add_likes.php" class="btn">View Content</a>
         </div>
         </div>
         <div class="box">
            <h3><?=$total_comments;?></h3>
            <p>Comments</p>
            <a href="comments.php" class="btn">View Comments</a>
         </div>
   </div>


   <script src="../js/admin_script.js"></script>
</body>

</html>