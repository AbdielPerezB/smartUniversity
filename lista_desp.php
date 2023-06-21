<?php
include("modelo/conexion_bd.php");
$idItem = isset($_GET["x"]) ? $_GET["x"] : "x";
if ($validar_DB = "si") 
{
    $option_del_select = "";
    $sql1 = "select * from lobobicis order by nom";
    if ($result = mysqli_query($link, $sql1)) 
    {
        $cont_nom = mysqli_num_rows($result);
        if ($cont_nom > 0) 
        {
            // $lt = "";
            // $lg = "";
           
            while ($lsnom = mysqli_fetch_array($result, MYSQLI_ASSOC)) 
            {
                $id = $lsnom['id'];
                $nom = $lsnom['nom'];

                

                if ($idItem == $id)
                {
                    $option_del_select .= "<option value=\"$id\" selected>$nom</option>";
                    $lt = $lsnom['lt'];
                    $lg = $lsnom['lg'];
                    
                }
                else
                {
                    $option_del_select .= "<option value=\"$id\">$nom</option>";
                }
                
                
            }
        } 
        else 
        {
            $option_del_select .= "<option value=\"0\">No hay usuarios registrados</option>";
        }
    } 
    else 
    {
        $option_del_select .= "<option value=\"0\">No se obtuvieron datos</option>";
    }
}

?>