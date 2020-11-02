<?php

echo  "DOB:" .$_POST['day']."/".$_POST['month']."/".$_POST['year'];


?>







<!DOCTYPE html>
<html>
<head>
	<title>Dob</title>
</head>
<body>
	<form method="post" action="dob_sane.php">
		
			<fieldset style="width: 200px;">

				<legend>DATE OF BIRTH</legend>
				
				<pre> dd      mm         year</pre>

				<input type="text" name="day" size="2">/<input type="text" name="month" size="2">/<input type="text" name="year" size="4">
				<hr>
				<input type="Submit" name="Submit" value="Submit">

			</fieldset>
				
	</form>

</body>
</html>