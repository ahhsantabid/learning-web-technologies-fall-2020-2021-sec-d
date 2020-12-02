<?php
	require_once('../php/header.php');
	require_once('../models/db.php');

	$conn = getConnection();
	//$sql = "select * from users";
	//$result = mysqli_query($conn, $sql);





	 if(isset($_REQUEST['submit'])){
    
		if(!empty($_REQUEST['name']) && !empty($_REQUEST['contact']) && !empty($_REQUEST['username']) && !empty($_REQUEST['password']) ){
			

			$name = $_POST['name'];
           $contact = $_POST['contact'];
           $username = $_POST['username'];
           $password = $_POST['password'];
	       
		   $conn = getConnection();
			
		$query = "insert into users(name,contact,username,password) values('$name' , '$contact' , '$username', '$password')";


		$run = mysqli_query($conn,$query) or die(mysqli_error($conn));

		if($run){


			echo "form insertion successfull";
			

		}
		else{
			echo "form not submitted";
		}
	}

		else{
			

			echo "Form insertion not successfull";
		
		}
		
		
	

	 }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>ADD</title>
    </head>
    <body>
        <form action="createUser.php" method="post" >
            <fieldset style="width: 600px;">
                <legend><b>ADD USER<b></legend>
                <table  cellpadding="10">
                   

                    <tr>
                        <th>Employee Name</th>
                        <td>
                            <input type="text" name="name"  placeholder="Enter Your name">
                           
                        </td>
						
                    </tr>
					
					<tr>
                        <th>Contact Number</th>
                        <td>
                            <input type="text" name="contact"  placeholder="Enter Your contact number">
                           
                        </td>

                    </tr>
					
					<tr>
                        <th>User Name</th>
                        <td>
                            <input type="text" name="username" placeholder="Enter Your username">
                           
                        </td>
                    </tr>
					
                    <tr>
                        <th>Password</th>
                        <td>
                            <input type="password" name="password" placeholder="Enter Your password" >
                            
                        </td>
                    </tr>
					
				
					
                    
                </table>
				<input type="submit" name= "submit" value="Submit">
                   <input type="reset">
				    <a href="home.php">Back</a> 
				   
                   
            </fieldset>
        </form>
        <br/>
    </body>
</html>