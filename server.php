<?php
    $stringRawData = file_get_contents('./database/dischi.json');

    $dischi = json_decode($stringRawData);
    header('Content-Type: application/json');
    echo json_encode($dischi);

    // var_dump($stringRawData, $todoList);
?>