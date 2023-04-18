<?php
include_once __DIR__.'/class/login.php';
//Obtenemos el json del cliente con los campos de "email" y "password"
$json_user = $_POST['datos'];
$object = json_decode($json_user);

$response = 'succes';
echo $response;

//Damos por echo que el cliente ya lo valido
/*$email_ = $object['email'];
$pass_ = $object['password'];

$login = new login($email_,$pass_);
$login->validarLogin();
echo $login->getResponse();
*/
?>