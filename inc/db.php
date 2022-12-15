<?php
$servername="localhost";
$username="new_user";
$password="password";
$dbname="crud_my";

$conn=  new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection Faiiled : ".mysqli_connect_error());
}