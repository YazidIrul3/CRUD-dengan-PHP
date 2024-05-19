<?php

include('../db/connectTodb.php');

// cek apakah tombol daftar sudah diklik atau blum?
function post_news($post) {
    global $connect;
        
    $title = $post['title'];
    $description = $post['description'];
    $image = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    // $image = $post['image'];
    $category = $post['category'];
    move_uploaded_file($file_tmp, '../img/'.$image);
    
    $query = "INSERT INTO news (title,description, image,category,time) VALUE ('$title', '$description', '$image','$category',CURRENT_TIMESTAMP())";
    mysqli_query($connect, $query);
    
    // apakah query simpan berhasil?
   return mysqli_affected_rows($connect);
}


?>
