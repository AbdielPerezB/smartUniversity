<?php
abstract class database{
    public $conexion;
    public $response;

    public function __construct(){
        $this->conexion = @mysqli_connect(
                            'localhost',//'localhost',
                            'root',//'root',
                            'nora2040',//'nora2040',
                            'smartuniversity'//'smartuniversity'
                        );
        if(!$this->conexion){
            die('Database hasnt conected');
        }
        $this->response = array();
        $this->conexion->set_charset("utf8"); //Establece el conjunto de caracteres predeterminado del cliente
    }
    

    //function to getting response from server
    public function getResponse(){
        return $this->response;
    }


    /*
    json_enconde() -> Devuelve un string con la representación JSON de value.
                   -> El value a ser codificado puede ser de cualquier tipo menos un resource,
                      normalmente es un arreglo de php que se convierte a json

    json_decode() -> Convierte un string codificado en JSON a una variable de PHP
                     (puede ser a un arreglo de php o en una simple variable)
    */
}

?>