<?php 
include "connectTodb.php";

function select($query) {

    global $connect;

    $result =mysqli_query($connect,$query);
    
    while($data = mysqli_fetch_assoc($result)) {
        $items[] = array(
            'id' =>$data["id"],
            'title' => $data["title"],
            'description' => $data["description"],
            'image' => $data["image"],
            'category' => $data["category"],
        );
        $response = array(
            'status' => 'ok',
            'items' => $items,
        );
    }
        
        return $response;
}
?>