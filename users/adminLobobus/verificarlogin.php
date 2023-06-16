<?php
if($_SESSION['estado'] != '2')
{
    header("Location: ./../../login.php");
    exit();
}
?>