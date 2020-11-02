<?php
	
    $d = "";
    $m ="";
    $y ="";

	if(isset($_REQUEST['Submit'])){
		$day = $_REQUEST['day'];
		
		if($day == ""){
			echo " field required...";
		}else{
			$d = $day;
		}
    }
    if(isset($_REQUEST['Submit'])){
		$month = $_REQUEST['month'];
		
		if($month == ""){
			echo " field required...";
		}else{
			$m = $month;
		}
    }
    
    if(isset($_REQUEST['Submit'])){
		$year = $_REQUEST['year'];
		
		if($year == ""){
			echo " field required...";
		}else{
			$y = $year;
		}
	}
?>





<!DOCTYPE html>
<html>
<head>
	<title>Dob</title>
</head>
<body>
	<form method="post" >
		
			<fieldset style="width: 200px;">

				<legend>DATE OF BIRTH</legend>
				
				<pre> dd      mm         year</pre>

				<input type="text" name="day" value=" <?=$d ?>" size="2"> / <input type="text" name="month" value="<?=$m ?>" size="2"> /<input type="text" name="year" value="<?=$y ?>" size="4">
				<hr>
				<input type="Submit" name="Submit" value="Submit">

			</fieldset>
				
	</form>

</body>
</html>