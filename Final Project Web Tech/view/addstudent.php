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
    'email' => isset($_POST['email']) ? $_POST['email'] : '',
    'contact' => isset($_POST['contact']) ? $_POST['contact'] : '',
    'address' => isset($_POST['address']) ? $_POST['address'] : '',
);

if(isset($_POST['savestudent']))
{
    $id = $_POST['id'];
    $student_name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];

    if(empty($id)) {
        $errors[] = "Student Id is required";
    }

    if(empty($student_name)) {
        $errors[] = "Student Name is required";
    }

    if(empty($email)) {
        $errors[] = "Email is required";
    }

    if(empty($contact)) {
        $errors[] = "Contact Number is required";
    }

    if(empty($address)) {
        $errors[] = "Address is required";
    }

    

    if(empty($errors)) {
        if(insertStudent(array(
            'id' => $id,
            'name' => $student_name,
            'email' => $email,
            'contact' => $contact,
            'address' => $address,
        ))) {
            header("location: student.php");
            exit;
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
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

            <a href="viewprofile.php"></a>
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
            <h1 style="color:orange">Add Student</h1>
            <?php if (!empty($errors)) { ?>
                <ul style="color: red">
                    <?php foreach ($errors as $error) { ?>
                        <li><?php echo $error ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <form method="post">
                <label>
                    Student ID:<br>
                    <input type="text" name="id" placeholder="Enter Student ID" value="<?php echo $previousValue['id'] ?>">
                </label><br><br>
                <label>
                    Student Name:<br>
                    <input type="text" name="name" placeholder="Enter Student Name" value="<?php echo $previousValue['name'] ?>">
                </label><br><br>
                <label>
                    Email:<br>
                    <input type="email" name="email" placeholder="Enter Student Email" value="<?php echo $previousValue['email'] ?>">
                </label><br><br>
                <label>
                    Contact Number:<br>
                    <input type="text" name="contact" placeholder="Enter Contact Number" value="<?php echo $previousValue['contact'] ?>">
                </label><br><br>
                <label>
                    Permanent Address:<br>
                    <input type="text" name="address" placeholder="Enter Student Address" value="<?php echo $previousValue['address'] ?>">
                </label><br><br>
               
                <input type="submit" name="savestudent" value="Add Course">
            </form>
        </td>
    </tr>
    <tr bgcolor="#D3DFEE">
        <td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020</td>
    </tr>
</table>
</body>
</html>