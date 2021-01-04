
<?php 
	session_start();

	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Change profile Picture</title>
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
		<table  border="1" width="900" height="130" align="center" cellpadding="15" cellspaceing="0">
        <tr bgcolor="indigo">
				<td align="left" style="border-right: 0; padding: 10px 15px;" width="200">
					<img src="../asset/logo.png" alt="home_logo" width="150" height="40" >
				</td>
				<td align="right" style="border-left: 0; padding: 10px 15px;">
                    
					<a href="logout.php">Logout</a>
				</td>
			</tr>
			<tr>
                <td valign="top" bgcolor="#D3DFEE">
                <b>Menu</b><hr>
                    <ul style="color:white">
						<li><a href="home.php">Dashboard</a></li>
						<li><a href="student.php">Student</a></li>
						<li><a href="course.php">Course</a></li>
						<li><a href="sellreport.php">Sell Report</a></li>
						<li><a href="payment.php">Payment Status</a></li>
						<li><a href="feedback.php">Feedback</a></li>
                        <li><a href="viewprofile.php">View Profie</a></li>
                        <li><a href="editprofile.php">Edit Profile</a></li>
                        <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                        <li><a href="">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
				</td>
				<td valign="top" >
					<fieldset align="left">
                        <legend style=" color:green"><b><h3>Change Profile Picture</h3></b></legend>
                        <table cellpadding="10" width="100%">
                            <tr >
                            <td align="center"><label for="profilepricture"><h2>Select new profile picture</h2></label></td>
                                    <td> <input type="file" name="profilepricture" id="profilepricture"></td>
                                </tr>
                                <tr>
                                <td  align="right"> <input type="submit" value="Save">
                                </tr>
                               




                        </table>
                    </fieldset>
				</td>
            </tr>
            <tr bgcolor="#D3DFEE">
			<td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020 <br><b>Devlop by Ahhsan Tabid</b></br></td>            </tr>
		</table>
	</body>
</html>