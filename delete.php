<?php
include("inc/header.php");

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header("Location:index.php");
}
$id=$_GET['id'];
$sql="SELECT * FROM `users` WHERE ` `id`='$id', LIMIT 1";
$result=mysqli_query($conn,$sql);
$chek=mysqli_num_rows($result);


$slq2="DELETE FROM `users` WHERE `id`='$id'";
mysqli_query($conn,$slq2);
?>

<h1 class="text-center col-12 bg-danger py-3 text-white my-2"> User  Have Been Deleted </h1>
   