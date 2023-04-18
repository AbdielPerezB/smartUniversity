<?php
include_once __DIR__.'/../database.php';
header('Content-Type: text/html; charset=UTF-8');

class login extends database{
    public $email;
    public $pass;
    public function __construct($email_, $pass_){
        $this->email = $email_;
        $this->pass = $pass_;
    }
    
    /*
    validarLogin() modifica el array response. Al final el array contiene los campos:
        status -> Error si no se hizo la conexión, Succes si todo salio bien
        message -> Indica si se establecio la conexión o no
        nom
        app
        apm
        email
        matricula
        estado
    */
    public function validarLogin(){
        //Por defaul el estado es error
        $this->response['status'] = "Error";
        $this->response['message'] = "Acceso denegado";
        $sql = "SELECT nom, app, apm, email, matricula, estado FROM usuario WHERE email = '{$this->email}' AND pass ='{$this->pass}';";
        if($result = $this->conexion->query($sql)){
            $row = $result->fetch_array(MYSQLI_ASSOC);
            //Guardamos todo en el arreglo response
            if(!is_null($row)) {
                $this->response['status'] =  "Success";
                $this->response['message'] = "Acceso aprobado";
                $this->response['nom'] = $row['nom'];
                $this->response['app']=$row['app'];
                $this->response['apm']=$row['apm'];
                $this->response['email']=$row['email'];
                $this->response['matricula']=$row['matricula'];
                $this->response['estado']=$row['estado'];
            }
            $result->free();

        }else {
            die('Query Error in READ: '.mysqli_error($this->conexion));
        }
        $this->conexion->close();
    }

}
?>