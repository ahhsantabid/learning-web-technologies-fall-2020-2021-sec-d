<?php
require_once ('../config/function.php');

if(!isLoggedIn()) {
    header("location: login.php");
    exit;
}


if(isset($_REQUEST['delete']) && isset($_REQUEST['student_id']) && !empty($sellreport = getsellreportById($_REQUEST['student_id']))) {
    if(deletesellreport($sellreport['student_id'])) {
        header('location: sellreport.php');
        exit;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Sell Report</title>
</head>
<body>
<style type="text/css">
    body table, body table tr>th, body table tr>td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<table border="1" width="1000" height="70" align="center" cellpadding="15" cellspaceing="0">
    <tr bgcolor="pink">
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
            <h1 style="color:orange">Sell Report</h1>
            <a href="addsellreport.php">Click here to Add new sell..</a><br><br>
            <table>
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Course Name</th>
                        <th>Issue Date</th>
                        <th>Original Price</th>
                        <th>Selling Price</th>


                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $sellreports = getsellreport();
                        if(count($sellreports)>0) {
                            foreach ($sellreports as $sellreport) { ?>
                                <tr>
                                    <td><?php echo $sellreport['student_id'] ?></td>
                                    <td><?php echo $sellreport['student_name'] ?></td>
                                    <td><?php echo $sellreport['course_name'] ?></td>
                                    <td><?php echo $sellreport['date'] ?></td>
                                    <td><?php echo $sellreport['original_price'] ?></td>
                                    <td><?php echo $sellreport['selling_price'] ?></td>
                                    <td>
                                    <a href="editsellreport.php?id=<?php echo $sellreport['student_id'] ?>">Edit</a> |
                                    <a href="sellreport.php?delete&id=<?php echo $sellreport['student_id'] ?>">Delete</a>
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