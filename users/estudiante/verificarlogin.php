<?php
if($_SESSION['estado'] != '1')
{
    header("Location: ./../../login.php");
    exit();
}
?>