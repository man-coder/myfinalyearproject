<?php
session_start();

if(!isset($_SESSION['user']))
{
	header("Location: loginf.php");
}
else if(isset($_SESSION['user'])!="")
{
	header("Location: freelan.php");
}

if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['user']);
	header("Location: loginf.php");
}
?>