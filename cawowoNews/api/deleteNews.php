<?php

include "connectTodb.php";

function delete_news($id_news) {
    global $connect;

    $query = "DELETE FROM news WHERE id=$id_news";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}