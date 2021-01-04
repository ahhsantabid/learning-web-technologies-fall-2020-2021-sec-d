<?php
require_once ('../config/function.php');

if(!isLoggedIn()) {
    header("location: login.php");
    exit;
}


if(isset($_REQUEST['delete']) && isset($_REQUEST['id']) && !empty($student = getStudentById($_REQUEST['id']))) {
    if(deleteStudent($student['id'])) {
        header('location: student.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
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
                <li><a href="student.php"> Student</a></li>
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
            <h1 style="color:orange">Student</h1>
            <a href="addstudent.php">Add Student</a><br><br>
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Permanent Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $students = getStudent();
                        if(count($students)>0) {
                            foreach ($students as $student) { ?>
                                <tr>
                                    <td><?php echo $student['id'] ?></td>
                                    <td><?php echo $student['name'] ?></td>
                                    <td><?php echo $student['email'] ?></td>
                                    <td><?php echo $student['contact'] ?></td>
                                    <td><?php echo $student['address'] ?></td>
                                    <td>
                                        <a href="editstudent.php?id=<?php echo $student['id'] ?>">Edit</a> |
                                        <a href="student.php?delete&id=<?php echo $student['id'] ?>">Delete</a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="7">No Results Found</td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </td>
    </tr>
    <tr bgcolor="#D3DFEE">
        <td align="center" colspan="2" style="padding: 10px 15px;">Copyright &copy; 2020</td>
    </tr>
</table>
</body>
</html>