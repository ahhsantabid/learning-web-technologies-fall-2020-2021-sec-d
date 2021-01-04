<?php 
	session_start();

	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>View Profile</title>
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
		<table  border="1" width="900" height="150" align="center" cellpadding="15" cellspaceing="0">
        <tr bgcolor="indigo">
				<td align="left" style="border-right: 0; padding: 10px 15px;" width="200">
					<img src="../asset/logo.png" alt="home_logo" width="150" height="40" >
				</td>
				<td align="right" style="border-left: 0; padding: 10px 15px;">
                    <a href="viewprofile.php"> </a> |
					<a href="logout.php">Logout</a>
				</td>
			</tr>
			<tr>
                <td valign="top" bgcolor="#D3DFEE">
                <b>Menu</b><hr>
                    <ul style="color:white">
						<li><a href="dashboard.php">Dashboard</a></li>
						<li><a href="student.php">Student</a></li>
						<li><a href="course.php">Course</a></li>
						<li><a href="sellreport.php">Sell Report</a></li>
						<li><a href="payment.php">Payment Status</a></li>
						<li><a href="feedback.php">Feedback</a></li>
                        <li><a href="viewprofile.php">View Profie</a></li>
                        <li><a href="editprofile.php">Edit Profile</a></li>
                        <li><a href="changeprofilepicture.php">Change Profile Picture</a></li>
                        <li><a href="changepassword.php">Change Password</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
				</td>
				<td valign="top" >
					<fieldset align="left">
                        <legend style=" color:green"><b><h3>PROFILE</h3></b></legend>
                        <table cellpadding="10" width="100%">
                            <tr style="border-bottom: 1px solid #000;">
                                <td>Name</td>
                                <td>:Emon khan</td>
                                <td rowspan="5" align="center"><img src="../asset/profile.png" width="110px" height="110px"><br><a href="editprofile.php">Change</a></td>
                            </tr>
                            <tr style="border-bottom: 1px solid #000;">
                                <td>Email</td>
                                <td>: emon@gmail.com</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #000;">
                                <td>User Name</td>
                                <td>: Emon </td>
                            </tr>
                            <tr style="border-bottom: 1px solid #000;">
                                <td>Gender</td>
                                <td>: Male</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #000;">
                                <td>Date of Birth</td>
                                <td>: 15/11/1995</td>
                            </tr>
                            <tr>
                                <td><a href="">Edit Profile</a></td>
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