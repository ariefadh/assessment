<?php 
 
 session_start();
 if (isset($_SESSION['userweb'])) {
     // Hapus session yang sesuai
     session_unset();
session_destroy();
 }
header("Location: .\index.php");
 
?>