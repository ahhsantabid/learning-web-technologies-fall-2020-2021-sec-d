<?php



  $a=$_POST["gender"];
  

  
  switch ($a) {

    case "Female":
     echo "female";
      break;
    case "Male":
        echo "male";
      break;
    case "Other":
      echo "other";
      break;
   
    default:
   echo "nothing selected";
      
  }







/*
if(isset($_POST['Submit']))
{
    echo $value = $_POST["gender"];
}
*/



?>