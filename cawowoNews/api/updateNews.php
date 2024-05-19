<?php

include('../db/connectTodb.php');

// cek apakah tombol daftar sudah diklik atau blum?
function update_news($post, $id_news) {
    global $connect;
        
    $title = $post['title'];
    $description = $post['description'];
    $image = $post['image'];
    $categoty = $post['category'];
    
    $query = "UPDATE news SET title = '$title', description = '$description', image = '$image', category = '$category' WHERE id=$id_news";
    mysqli_query($connect, $query);
    
   return mysqli_affected_rows($connect);
}


?>
