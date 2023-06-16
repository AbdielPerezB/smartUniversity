<?php
if($_SESSION['estado'] != '3')
{
    header("Location: ./../../login.php");
    exit();
}
?>