<?php
include_once __DIR__.'/../database.php';

class login extends database{
    public $email;
    public $pass;
    public function __construct($email_, $pass_){
        parent::__construct();
        $this->email = $email_;
        $this->pass = $pass_;
    }
    
    /*
    validarLogin()
    SI NO SALIO BIEN LA CONEXION:
    ['ststaus']: "Error"
    ['message']: "Query error in READ.mysqli_error"

    SI EL USUARIO NO EXISTE:
    ['ststaus']: "Error"
    ['message']: "User doesn't exists"

    SI SALIO BIEN:
    ['ststaus']: "Success"
    ['message']: "Login exists"
    ['nom']:
    ['app']:
    ['apm']:
    ['email']:
    ['matricula']:
    ['estado']:
    */
    public function validarLogin(){
        //Por defaul el estado es error
        $this->response['status'] = "Error";
        $sql = "SELECT nom, app, apm, email, matricula, estado FROM usuario WHERE email = '{$this->email}' AND pass ='{$this->pass}';";
        if($result = $this->conexion->query($sql)){
            $row = $result->fetch_assoc();
            //Guardamos todo en el arreglo response
            if(!is_null($row)) {
                $this->response['status'] =  "Success";
                $this->response['message'] = "User exists";
                $this->response['nom'] = $row['nom'];
                $this->response['app']=$row['app'];
                $this->response['apm']=$row['apm'];
                $this->response['email']=$row['email'];
                $this->response['matricula']=$row['matricula'];
                $this->response['estado']=$row['estado'];
            }
            //$result->free();
            else{
                $this->response['message'] = "User doesn't exists";
            }

        }else {
            $this->response['message'] = "Query Error in READ: ".mysqli_error($this->conexion);
        }
        $result->free();
        $this->conexion->close();
    }

}
?>