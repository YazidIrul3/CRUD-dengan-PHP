<?php 
include '../api/deleteNews.php';

$id_news = (int)$_GET['id_news'];

if(delete_news($id_news) > 0 ) {
    echo "<script>
            alert('Data deleted success');
            document.location.href = 'admin.php';
        </script>";
} else {
    echo "<script>
    alert('Data deleted failed');
    document.location.href = 'admin.php';
    </script>";
}
?>