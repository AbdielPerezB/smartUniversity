<?php
include("modelo/conexion_bd.php");
if ($validar_DB = "si") {
    $option_del_select = "";
    $sql1 = "select * from lobobicis order by nom";
    if ($result = mysqli_query($link, $sql1)) {
        $cont_nom = mysqli_num_rows($result);
        if ($cont_nom > 0) {
            while ($lsnom = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $id = $lsnom['id'];
                $nom = $lsnom['nom'];
                $option_del_select .= "<option value = \"$id\">$nom<option>";
            }
        } else {
            $option_del_select .= "<option value = \"0\">No hay usuarios registrados<option>";
        }
    }
} else {
    $option_del_select .= "<option value = \"0\">No se obtuvieron datos<option>";
}
?>