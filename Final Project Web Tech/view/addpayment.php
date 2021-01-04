<?php
require_once ('../config/function.php');

if(!isLoggedIn()) {
    header("location: login.php");
    exit;
}

$errors = array();

$previousValue = array(
    'id' => isset($_POST['id']) ? $_POST['id'] : '',
    'name' => isset($_POST['name']) ? $_POST['name'] : '',
    'course' => isset($_POST['course']) ? $_POST['course'] : '',
    'price' => isset($_POST['price']) ? $_POST['price'] : '',
	'date' => isset($_POST['date']) ? $_POST['date'] : '',
	'action' => isset($_POST['action']) ? $_POST['action'] : '',

);

if(isset($_POST['savepayment']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $course = $_POST['course'];
    $price = $_POST['price'];
	$date = $_POST['date'];
	$action = $_POST['action'];


    if(empty($id)) {
        $errors[] = "Student Id is required";
    }

    if(empty($name)) {
        $errors[] = "Student Name is required";
    }

    if(empty($course)) {
        $errors[] = "Course Name is required";
    }

    if(empty($price)) {
        $errors[] = "Purchage Rate  is required";
    }

    if(empty($date)) {
        $errors[] = "Purchage Date is required";
	}
	if(empty($action)) {
        $errors[] = "Action is required";
    }

    

    if(empty($errors)) {
        if(insertpayment(array(
            'id' => $id,
            'name' => $name,
            'course' => $course,
            'price' => $price,
			'date' => $date,
			'action' => $action,

        ))) {
            header("location: payment.php");
            exit;
        }
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Payment</title>
</head>
<body>
<style type="text/css">
    body table, body table tr>th, body table tr>td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table border="1" width="1000" height="70" align="center" cellpadding="15" cellspaceing="0">
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
            <ul style="color:white" >
                <li><a href="home.php">Dashboard</a></li>
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
        <td valign="top">
            <h1 style="color:orange">New Payment Record</h1>
            <?php if (!empty($errors)) { ?>
                <ul style="color: red">
                    <?php foreach ($errors as $error) { ?>
                        <li><?php echo $error ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
			<fieldset style="width: 350px">
						<legend ><b style="color:blue"><h2>Payment</h2></b></legend>
						<form method="POST" align="left">
                            <table border="2" bgcolor="#A7BFDE">
							<tr>
                                    <td><label for="id">Student ID</label></td>
                                    <td>: <input type="text" id="id" name="id" placeholder="Enter Student ID" value="<?php echo $previousValue['id'] ?>"></td>
                                </tr>
							   
							    <tr>
                                    <td><label for="username">User Name</label></td>
                                    <td>: <input type="text" id="username" name="name" placeholder="Enter Student User Name" value="<?php echo $previousValue['name'] ?>"></td>
                                </tr>

								<tr>
                                    <td><label for="course">Course</label></td>
                                    <td>: <input type="text" id="course" name="course" placeholder="EnterCourse Name" value="<?php echo $previousValue['course'] ?>"></td>
                                </tr>
                               
                               


							<tr>
                                    <td><label for="price">Purchage Rate</label></td>
                                    <td>: <input type="text" id="price" name="price" placeholder="Course Rate" value="<?php echo $previousValue['price'] ?>"></td>
                                </tr>
								<tr>
                                    <td><label for="date">Purchage Date</label></td>
                                    <td>: <input type="date" id="price" name="date" placeholder="Course Date" value=value="<?php echo $previousValue['date'] ?>"></td>
                                </tr>
								
								<tr >
                                    <td><label for="valid">Action</label></td>
                                    <td>: <input type="radio" id="valid" name="action" value="valid">Valid
                                        : <input type="radio" name="action" value="invalid">Invalid
                                        
                                    </td>
                                </tr>

                        
                            </table>
                           
                           
                            <br><br>
                            <input type="submit" name="savepayment" value="Payment">
							
                        </form>
                    </fieldset>
    <tr bgcolor="#D3DFEE">
        <td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020</td>
    </tr>
</table>
</body>
</html>