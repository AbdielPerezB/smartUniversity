<?php
if($_SESSION['estado'] != '0')
{
    header("Location: ./../../login.php");
    exit();
}
?>