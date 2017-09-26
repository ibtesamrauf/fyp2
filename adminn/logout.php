<?php
session_start();
unset($_SESSION['user1']);

// session_destroy($_SESSION['user1']);


header("location: index.php");

?>