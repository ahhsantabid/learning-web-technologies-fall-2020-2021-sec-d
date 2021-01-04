<?php
require_once ('../config/function.php');

if(!isLoggedIn()) {
    header("location: login.php");
    exit;
}

$id = $_GET['student_id']; 
$conn = mysqli_connect("localhost","root","","elearning");
$sql = "SELECT * FROM sellreport WHERE id='$id'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result) ;




$errors = array();

if(isset($_POST['savesell']))
{
    $student_name = $_POST['student_name'];
    $course_name = $_POST['course_name'];
    $date = $_POST['date'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];

    if(empty($student_name)) {
        $errors[] = "student Name is required";
    }

    if(empty($course_name)) {
        $errors[] = "Course Name is required";
    }

    

    if(empty($date)) {
        $errors[] = "Issue date is required";
    }

    if(empty($original_price)) {
        $errors[] = "Original Price is required";
    }

    if(empty($selling_price)) {
        $errors[] = "Selling Price is required";
    }

    
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Update Sell Report</title>
</head>
<body>
<style type="text/css">
    body table, body table tr>th, body table tr>td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table border="1" width="1000" height="130" align="center" cellpadding="15" cellspaceing="0">
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
            <h1 style="color:orange">Update Sell Report</h1>
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
                    <input type="text" name="student_id" placeholder="Enter Student ID" value="<?php echo $row['student_id'] ?>" readonly>
                </label><br><br>
                <label>
                    Student Name:<br>
                    <input type="text" name="student_name" placeholder="Enter Student Name" value="<?php echo $row['student_name'] ?>">
                </label><br><br>
                Course Name:<br>
                    <input type="text" name="course_name" placeholder="Enter Course Name" value="<?php echo $row['course_name'] ?>">
                </label><br><br>
                <label>
                    Issue Date:<br>
                    <input type="text" name="date" placeholder="Enter Issue Date" value="<?php echo $row['date'] ?>">
                </label><br><br>
                <label>
                    Original Price:<br>
                    <input type="text" name="original_price" placeholder="Enter Original Price" value="<?php echo $row['original_price'] ?>">
                </label><br><br>
                <label>
                    Selling Price:<br>
                    <input type="text" name="selling_price" placeholder="Enter Selling Price" value="<?php echo $row['selling_price'] ?>">
                </label><br><br>
                <input type="submit" name="savesell" value="Update Sells">
            </form>
        </td>
    </tr>
    <tr bgcolor="#D3DFEE">
        <td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020</td>
    </tr>
</table>
</body>
</html>