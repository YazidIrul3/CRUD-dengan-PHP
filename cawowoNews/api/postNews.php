<?php

include("connectTodb.php");

// cek apakah tombol daftar sudah diklik atau blum?
function post_news($post) {
    global $connect;
        
    $title = $post['title'];
    $description = $post['description'];
    $image = $post['image'];
    $category = $post['category'];
    
    $query = "INSERT INTO news (title,description, image,category) VALUE ('$title', '$description', '$image','$category')";
    mysqli_query($connect, $query);
    
    // apakah query simpan berhasil?
   return mysqli_affected_rows($connect);
}


?>
