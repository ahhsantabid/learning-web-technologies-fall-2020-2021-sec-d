
<?php 
require_once ('../config/function.php');
require_once ('../config/db.php');




	
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
                        <legend style=" color:green"><b><h3>Change Password</h3></b></legend>
                        <table cellpadding="10" width="100%">
                            <tr align="top">
                            <td align="center"><label for="oldpassword">Enter Old Password</label></td>
                                    <td> :<input type="text" name="oldpassword" id="oldpassword"></td>
                                </tr>
                               <tr>
                               
                                <td align="center"><label for="newpassword">Enter New Password</label></td>
                                    <td> :<input type="text" name="newpassword" id="newpassword"></td>
                                    
                                </tr>
                                <tr>
                               
                                <td align="center"><label for="email">Enter Your Email</label></td>
                                    <td> :<input type="text" name="email" id="email"></td>
                                    
                                </tr>
                          
                                <tr>
                                <td  align="right"><input type="submit" value="Save" name="fpass"></td>
                                </tr>

                                <?php

                                if(isset($_POST['fpass'])){

                                    $oldpassword=$_POST ['oldpassword'];
                                    $newpassword=$_POST ['newpassword'];
                                    $email=$_POST ['email'];

                                    if($oldpassword == $newpassword){
                                        $query = "select * from registration where email='$email'";
                                        $query_check= mysqli_query($conn,$query);

                                        if($query_check){

                                            if(mysqli_num_rows($query_check)>0){

                                                $query1= "update registration set password='$newpassword'";
                                                $query_run= mysqli_query($conn,$query1);

                                                if($query_run){
                                                    echo"
                                                    <script>

                                                    alert('Your password is Updated');
                                                    window.location.href='home.php';

                                                    </script>
                                                    ";

                                                }
                                                else{

                                                    echo"
                                                    <script>

                                                    alert('Your password is not Updated try again!!!');
                                                    window.location.href='changepassword.php';

                                                    </script>
                                                    ";
                                                }

                                            }else{
                                                echo"
                                                <script>

                                                alert('Your email is not found Register first');
                                                window.location.href='reg.php';

                                                </script>
                                                ";
                                            }



                                        }

                                         

                                    }else{

                                        echo"
                                                    <script>

                                                    alert('Email query not work');
                                                    window.location.href='changepassword.php';

                                                    </script>
                                                    ";
                                    }






                                    


                                }
                                else{

                                    //submit button else
                                }






                                ?>



                                <td align="right" colspan="2">
                                       <a href="home.php">GO_to_back</a>

                                      
                                    </td>
                               




                        </table>
                        
                    </fieldset>
                    

				</td>
                
            </tr>
            <tr bgcolor="#D3DFEE">
			<td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020 <br><b>Devlop by Ahhsan Tabid</b></br></td>            </tr>
		</table>
	</body>
</html>