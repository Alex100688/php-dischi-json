<?php
 $albums= file_get_contents('dischi.json');
 $albums = json_decode($albums, true);
 $json_string = json_encode($albums);
 header("Content-Type: application/json");
 echo json_encode($albums)
?>
