<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="staff";
$conn=mysqli_connect($hostname,$username,$password,$databasename);
if(!$conn)
{
    die("unable to connect" .$mysqli_connect_error());
}

?>
