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
















<!DOCTYPE html>
<html>
<head>
	<title>gender</title>
</head>
<body>
	<form method="POST" action="GenderSame.php">
		
					<fieldset style="width : 200px">

				<legend>GENDER</legend>

				<input type="radio" name="gender" value= "Male" > Male
				<input type="radio" name="gender"  value="Female" > Female
				<input type="radio" name="gender" value="Other" > Other <br> <hr>
				<input type="Submit" name="Submit" value="Submit">
				
			</fieldset>
				
       
        
	</form>

</body>
</html>
