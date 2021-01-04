<?php
require_once ('../config/function.php');

if(!isLoggedIn()) {
    header("location: login.php");
    exit;
}

$errors = array();

$previousValue = array(
    'id' => isset($_POST['id']) ? $_POST['id'] : '',
    'course_name' => isset($_POST['course_name']) ? $_POST['course_name'] : '',
    'author' => isset($_POST['author']) ? $_POST['author'] : '',
    'duration' => isset($_POST['duration']) ? $_POST['duration'] : '',
    'original_price' => isset($_POST['original_price']) ? $_POST['original_price'] : '',
    'selling_price' => isset($_POST['selling_price']) ? $_POST['selling_price'] : '',
);

if(isset($_POST['savecourse']))
{
    $id = $_POST['id'];
    $course_name = $_POST['course_name'];
    $author = $_POST['author'];
    $duration = $_POST['duration'];
    $original_price = $_POST['original_price'];
    $selling_price = $_POST['selling_price'];

    if(empty($id)) {
        $errors[] = "Course Id is required";
    }

    if(empty($course_name)) {
        $errors[] = "Course Name is required";
    }

    if(empty($author)) {
        $errors[] = "Author Name is required";
    }

    if(empty($duration)) {
        $errors[] = "Duration is required";
    }

    if(empty($original_price)) {
        $errors[] = "Original Price is required";
    }

    if(empty($selling_price)) {
        $errors[] = "Selling Price is required";
    }

    if(empty($errors)) {
        if(insertCourse(array(
            'id' => $id,
            'course_name' => $course_name,
            'author' => $author,
            'duration' => $duration,
            'original_price' => $original_price,
            'selling_price' => $selling_price
        ))) {
            header("location: course.php");
            exit;
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
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
                <li><a href="login.php">Logout</a></li>
            </ul>
        </td>
        <td valign="top">
            <h1 style="color:orange">Add Course</h1>
            <?php if (!empty($errors)) { ?>
                <ul style="color: red">
                    <?php foreach ($errors as $error) { ?>
                        <li><?php echo $error ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <form method="post">
                <label>
                    Course ID:<br>
                    <input type="text" name="id" placeholder="Enter Course ID" value="<?php echo $previousValue['id'] ?>">
                </label><br><br>
                <label>
                    Course Name:<br>
                    <input type="text" name="course_name" placeholder="Enter Course Name" value="<?php echo $previousValue['course_name'] ?>">
                </label><br><br>
                <label>
                    Author:<br>
                    <input type="text" name="author" placeholder="Enter Course Author" value="<?php echo $previousValue['author'] ?>">
                </label><br><br>
                <label>
                    Course Duration:<br>
                    <input type="text" name="duration" placeholder="Enter Course Duration" value="<?php echo $previousValue['duration'] ?>">
                </label><br><br>
                <label>
                    Original Price:<br>
                    <input type="text" name="original_price" placeholder="Enter Original Price" value="<?php echo $previousValue['original_price'] ?>">
                </label><br><br>
                <label>
                    Selling Price:<br>
                    <input type="text" name="selling_price" placeholder="Enter Selling Price" value="<?php echo $previousValue['selling_price'] ?>">
                </label><br><br>
                <input type="submit" name="savecourse" value="Add Course">
            </form>
        </td>
    </tr>
    <tr bgcolor="#D3DFEE">
        <td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020</td>
    </tr>
</table>
</body>
</html>