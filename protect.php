<?php

if(!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
 header("Location: ./denied-access.php");
 exit; 
}


?>