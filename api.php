<?php
 $albums= file_get_contents('dischi.json');
 $albums = json_decode($albums, true);
 var_dump($albums);die;
 header("Content-Type: application/json");
 echo json_encode($albums)
?>
