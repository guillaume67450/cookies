<?php session_start();

$_SESSION['login'] = null;
$_POST['login'] = null;
header('Location: /'); //redirect to main
?>
