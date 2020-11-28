<?php
require_once ('../database/db.php') ;
//$con = mysqli_connect('localhost','root','','elearning');
$con=getConnection();
if(!$con){
   die("Not connected..". mysqli_error($con));
}
   $receive = $_REQUEST['id'];

$sql= "DELETE FROM course WHERE id= $receive ";
$result=mysqli_query($con,$sql);


if($result){
    header("location:viewcourse.php?deleted ");
}





?>