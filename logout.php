<?php
 if (session_status() !== PHP_SESSION_ACTIVE) {    session_start();   }
session_destroy();
session_unset();
header('Location: login.php');
?>