<?php
include_once __DIR__.'/../database.php';
/*
Forma de declarar:
    $pos = new pos("Select...");
    $response = $post->getResponse();

Formas de respuesta para esta clase:
    1. Si hay $response['status'] entonces hubo un error, la variable $response['message'] nos dara detalles
    2.Si no existe $response['status'] es porque unicamente se devolvió el arreglo resultante de la query que ejecutamos
*/

class Post extends database{
    private $query;
    public function __construct($query_){
        $this->query = $query_;
        parent::__construct();
        
        //Ejecutamos el query Y AL MISMO TIEMPO SE VALIDA SI HUBO RESULTADOS
        if($result = $this->conexion->query($this->query)){
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            //Verificamos que la respuesta no esté vacía
            if(!is_null($rows)){
                //Se mapean al arreglo de respuesta
                foreach($rows as $num => $row)
                {
                    foreach($row as $key => $value)
                    {
                        $this->response[$num][$key] = $value;//Unicamente devolvemos el arreglo resultante de la query
                    }
                }
            }
            //Si la respuesta es vacía
            else{
                $this->response['status'] = "Error";
                $this->response['message'] = "Datos vacíos";

            }
            $result->free();
        }
        else
        {
            $this->response['status'] = "Error";
            $this->response['message'] = "Query error ".mysqli_error($this->conexion);
        }
        $this->conexion->close();

        
    }
}
?>