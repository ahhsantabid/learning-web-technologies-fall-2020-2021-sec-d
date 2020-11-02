<?php
	
    if(isset($_POST['group'])){
        $group=$_POST['group'];
    } else {
    
        $group = "empty";
    }
    
    echo "Blood group : ".$group;
    ?>






<!DOCTYPE html>
<html>
<head>
	<title>Blood group</title>
</head>
<body>
	<form action="blood_group_same.php"method="post">
		<fieldset style="width: 200px;">
<legend>BLOOD GROUP</legend>
			 <select name="group" >
                    
            
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                </select> <br>
                <hr>
				<input type="Submit" name="Submit" value="Submit">
				</fieldset>
			
	</form>

</body>
</html>