<?php
require_once('../php/header.php');
require_once('../models/db.php');
$conn=getConnection();
if(!$conn){
   die("Not connected..". mysqli_error($conn));
}
   $receive = $_REQUEST['id'];

$sql= "DELETE FROM users WHERE id= $receive ";
$data=mysqli_query($conn,$sql);


if($data){
    header("location:userlist.php?deleted ");
}





?>