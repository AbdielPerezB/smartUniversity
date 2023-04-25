<?php
include_once __DIR__.'/class/login.php';
//Obtenemos el json del cliente con los campos de "email" y "password"
if( isset($_POST['datos']) ){
    $json_user = $_POST['datos'];
    $object = json_decode($json_user);

    //Damos por echo que el cliente ya lo valido
    $email_ = $object->email;
    $pass_ = $object->password;

    $login = new login($email_,$pass_);
    $login->validarLogin();
    $response = $login->getResponse();

}else{
    $response = array();
    $response['status'] = "Error";
    $response['message'] = "Datos no llegaron al servidor";
}
echo json_encode($response, JSON_PRETTY_PRINT);

?>