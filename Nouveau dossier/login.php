<?php
$email="root";
$mdp="";
$db="mysql";
$server="localhost";


$link=mysqli_connect($server,$email,$mdp,$db);

if($link)
{
	echo"connexion etablie";
}else
{
	die(mysqli_connect_error());
}
