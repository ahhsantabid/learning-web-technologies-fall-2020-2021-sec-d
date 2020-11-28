<?php

$con=mysqli_connect('localhost','root','','elearning');

if(!$con){
    die("Not connected..". mysqli_error($con));
}

$sql= "SELECT * FROM course";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
/*if($count>0){
    while($row=mysqli_fetch_assoc($result)){
        echo"{$row['id']}";
        echo"{$row['course_name']}";

    }
}*/



?>




<!DOCTYPE html>
<html>
	<head>
		<title>View course</title>
	</head>
	<body>
		<style> 
            table {
                border-collapse: collapse;
            }

			body>table, body>table>th, body>table>td {
			    border-color: 1px solid black;
			}
		</style>
		<table border="1" width="700" height="70" align="center" cellpadding="15" cellspaceing="0" >
        <tr bgcolor="pink">
				<td align="left" style="border-right: 0; padding: 10px 15px;" width="200">
					<img src="../info/logo.png" alt="home_logo" width="160" height="65" >
				</td>
				<td align="right" style="border-left: 0; padding: 10px 15px;"  colspan="2">
                    Logged in as
                    <a href="viewprofile.php"> </a> |
					<a href="logout.php">Logout</a>
				</td>
			</tr>
			
				<td valign="top"  colspan="2">
					<fieldset align="left">
                        <legend style="color: green"><b ><h2>List of Courses</h2></b></legend>
                        <table cellpadding="10" width="100%">
                        <tr>
		<td bgcolor="#FFFFFF" colspan="2">
			<table width="100%" border="1" cellpadding="5" cellspacing="0"  colspan="2">
				<thead>
					<tr bgcolor="#A7BFDE" colspan="2">
						<th ><font face="Arial" size="2">ID</font></th>
						<th><font face="Arial" size="2">Course Name</font></th>
						<th><font face="Arial" size="2">Author</font></th>
						<th><font face="Arial" size="2">Duration</font></th>
                        <th><font face="Arial" size="2">Original price</font></th>
                        <th><font face="Arial" size="2">Selling price</font></th>
                        
					</tr>
                </thead>
                <?php
                if($count>0){
    while($row=mysqli_fetch_assoc($result)){ ?>
        <tr bgcolor="#A7BFDE" colspan="2">
						<th ><font face="Arial" size="2"><?php echo"{$row['id']}";?></font></th>
						<th><font face="Arial" size="2"><?php echo"{$row['course_name']}";?></font></th>
						<th><font face="Arial" size="2"><?php echo"{$row['author']}";?></font></th>
						<th><font face="Arial" size="2"><?php echo"{$row['duration']}";?></font></th>
                        <th><font face="Arial" size="2"><?php echo"{$row['original_price']}";?></font></th>
                        <th><font face="Arial" size="2"><?php echo"{$row['selling_price']}";?></font></th>
                        
					</tr>
        


   <?php } ?>
   <?php } ?>

      

             
                         </table>
                    </fieldset>
                    <tr align="left" style="border-right: 0; padding: 10px 15px;" width="50">
                                <td align="right" style="border-right: 0; padding: 10px 15px;" width="50"> <a href="addcourse.php"><img src="../info/add.png" alt="img" width="60" height="30" <a href="addcourse.php"></a></a></td>
                            </tr>
                            <tr>
                                <td align=right><a href="dashboard.php">GO_to_back</a></td>
                            </tr>
				</td>
            </tr>
           
        </table>
        <tr bgcolor="#D3DFEE">
                <td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020 <br><b>Devlop by Ahhsan Tabid</b></br></td>
            </tr>
	</body>
</html>
