<?php
      require_once('../database/db.php');
       
      if(isset($_POST['submit'])){

              $id     =   $_POST['id'];
              $name   =   $_POST['name'];
               $author =   $_POST['author'];
                $duration = $_POST['duration'];
                $original_price = $_POST['originalprice'];
               $selling_price = $_POST['sellingprice'];

       if($id && $name && $author && $duration && $original_price && $selling_price){
       $con =getConnection();

     if(!$con){
   die("Not Connected". mysqli_error());
   }
   $sql = "INSERT INTO course (id,course_name,author,duration,original_price,selling_price) VALUES ('$id','$name','$author','$duration','$original_price',' $selling_price')";

   $result = mysqli_query($con,$sql);

if(!$result){
   die("not inserted..".mysqli_error());

}



}

}

?>





<!DOCTYPE html>
<html>
	<head>
		<title>Student</title>
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
		<table border="1" width="700" height="70" align="center" cellpadding="15" cellspaceing="0">
			<tr bgcolor="pink">
				<td align="left" style="border-right: 0; padding: 10px 15px;">
					<img src="../info/logo.png" alt="home_logo" width="160" height="62" >
				</td>
				<td align="right" style="border-left: 0; padding: 10px 15px;">
                    <a href="index.php"> Home</a> |
					<a href="login.php">Login</a> |
					<a href="registration.php">Registration</a>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
                    <?php if(!empty($errors)): ?>
                    <fieldset style="width: 370px" align="left">
                        <legend style="color: red">
                            <b>ERRORS</b>
                        </legend>
                        <ul>
                        <?php foreach($errors as $error) : ?>
                            <li style="color: red"><?= $error ?></li>
                        <?php endforeach ?>
                        </ul>
                    </fieldset>
                    <br>
                    <?php endif ?>
					<fieldset style="width: 370px">
                        <legend>
                            <b style="color: orange"><h2>Add Course</h2></b>
                        </legend>
                        <form method="POST">
                            <table cellpadding="8"bgcolor="#A7BFDE">
                                <tr style="border-bottom: 1px solid #000;">
                                    <td><label for="id">Course ID</label></td>
                                    <td> :<input type="text" name="id" id="id" placeholder="Enter your ID"></td>
                                </tr>
                                <tr style="border-bottom: 1px solid #000;">
                                    <td><label for="name">Course Name</label></td>
                                    <td>  :<input type="text" name="name" id="name" placeholder="Enter your Name"></td>
                                </tr>
                                <tr style="border-bottom: 1px solid #000;">
                                    <td><label for="author">Author</label></td>
                                    <td>  :<input type="text" name="author" id="author" placeholder="Enter your author name"></td>
                                </tr>
                                
                                <tr style="border-bottom: 1px solid #000;">
                                    <td><label for="duration">Duration</label></td>
                                    <td> :<input type="text" name="duration" id="duration" placeholder="Enter duration time "></td>
                                </tr>

                                <tr style="border-bottom: 1px solid #000;">
                                    <td><label for="originalprice">Original price</label></td>
                                    <td> :<input type="text" name="originalprice" id="originalprice" placeholder="Enter originalprice "></td>
                                </tr>

                                <tr style="border-bottom: 1px solid #000;">
                                    <td><label for="sellingprice">Selling price</label></td>
                                    <td> :<input type="text" name="sellingprice" id="sellingprice" placeholder="Enter sellingprice "></td>
                                </tr>
                               
                              
                               
                                
                                <tr>
                                    <td align="left" colspan="2">
                                        <input type="submit" name="submit" value="submit">
                                        <input type="reset" value="Reset">
                                    </td>
                                    <td align="center" colspan="2">
                                       <a href="dashboard.php">GO_to_back</a>

                                      
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </fieldset>
				</td>
            </tr>
            <tr bgcolor="#D3DFEE">
                <td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020 <br><b>Devlop by Ahhsan Tabid</b></br></td>
            </tr>
		</table>
	</body>
</html>