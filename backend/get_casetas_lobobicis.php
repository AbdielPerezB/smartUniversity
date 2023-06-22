<?php
include_once __DIR__.'/class/post.php';
if(isset($_POST['opc']))
{
    $opc = $_POST['opc'];
    $query = "SELECT * FROM lobobicis WHERE id = {$opc};";
    $lobobicis = new Post($query);
    $response = $lobobicis->getResponse();

    echo json_encode($response, JSON_PRETTY_PRINT);
}
?>