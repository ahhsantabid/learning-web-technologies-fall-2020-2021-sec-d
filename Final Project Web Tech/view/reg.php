<?php

     /**
     * @author Ahsan Tabid
     */

 require_once ('../config/function.php') ;

    if(isLoggedIn()) {
        header("location: home.php");
        exit;
    }

    $errors = array();

    if(isset($_POST['reg'])){
        $name   =   $_POST['name'];
        $email =   $_POST['email'];
        $password = $_POST['password'];
        $confirmpassword = $_POST['confirmpassword'];

        if(empty($name)) {
            $errors[] = "Name is required";
        } else if(strlen($name)<4) {
            $errors[] = "Name must be greater than 3 Characters";
        }

        if(empty($email)) {
            $errors[] = "Email is required";
        } else if(strpos($email, "@")==false || strpos($email, ".")==false || strpos($email, ".")<strpos($email, "@")) {
            $errors[] = "Invalid Email Address";
        } 

        if(empty($password) || empty($confirmpassword)) {
            $errors[] = "Password and Confirm Password is required";
        }  else if(strlen($password)<=4 || strlen($password)>16)
	    {
		$errors['password'] = 'Must be 4 to 16 characters long';
        }
        
        else if($password!=$confirmpassword) {
            $errors[] = "Password and Confirm Password doesn't match";
        }

        if(empty($errors)) {
            if(insertUser(array(
                "name" => $name,
                "email" => $email,
                "password" => $password
            ))) {
                header('location: login.php');
                exit;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/web.css">
        <title>Registration</title>
        <h2 class="h" align="center">Welcome to ELearning</h2>
    </head>
    <body id="b">
        <div id="d">
            <form action="reg.php" method="POST" align="center" onsubmit="return validation()">
                <img src="../asset/register.gif" alt="register logo" class ="img" align="center"><br><br>
                <?php if (!empty($errors)) { ?>
                    <fieldset align="left" style="color: red">
                        <legend>Errors</legend>
                        <ul>
                    <?php foreach ($errors as $error) { ?>
                        <li><?php echo $error ?></li>
                    <?php } ?>
                        </ul>
                    </fieldset>
                <?php } ?>
                <label>User Name</label>
                <input name="name" type="text" id="name" onchange="verifyName(this.value)" class="input" placeholder="Enter your name"><br>
                <label>Email</label>
                <input name="email" type="email" id="email" onchange="verifyEmail(this.value)" class="input" placeholder="Enter your email"><br>
                <label>Password</label>
                <input name="password" type="password" id="password" onchange="verifyPassword(this.value)" class="input" placeholder="Enter your password"><br>
                <label>Confirm Password</label>
                <input name="confirmpassword" type="password" onchange="verifyConfirmPassword(this.value)" id="confirmpassword" class="input" placeholder="Enter your confirm password"><br>
                <input name="reg" type="submit"  class="button" value="Sign Up"><br>
                <a href="login.php"><input name="back" type="button" class="button" value="Back to Log In"><br>
            </form>
        </div>
        <script type="text/javascript">
            function verifyName(name) {
                if(!name || !(name.length>0)) {
                    alert('Name is required');
                }
                
            }

            function verifyEmail(email) {
                if(!email || !(email.length>0)) {
                    email.push('Email is required');
                }
            }

            function verifyPassword(password) {
                if(!password || !(password.length>0)) {
                    alert('Password & Confirm Password is required');
                }
            }

            function verifyConfirmPassword(confirmpassword) {
                var password = document.getElementById('password').value;
                if(!confirmpassword || !(confirmpassword.length>0)) {
                    alert('Password & Confirm Password is required');
                } else if(password && password.length>0 && password!=confirmpassword) {
                    alert('Password & Confirm Password doesn\'t match');
                }
            }

            function validation() {
                var name = document.getElementById('name').value,
                    email = document.getElementById('email').value,
                    password = document.getElementById('password').value,
                    conpassword = document.getElementById('confirmpassword').value;

                var errors = [];

                if(!name || !(name.length>0)) {
                    errors.push('Name is required');
                }  
                

                if(!email || !(email.length>0)) {
                    errors.push('Email is required');
                }

                if(!password || !conpassword || !(password.length>0) || !(conpassword.length>0)) {
                    errors.push('Password & Confirm Password is required');
                }
                else if(password!=conpassword) {
                    errors.push('Password & Confirm Password doesn\'t match');
                }

                if(!(errors.length>0)) {
                    return true;
                } else {
                    alert("Errors Occurred: \n"+errors.join("\n"));
                    return false;
                }
            }
        </script>
    </body>
</html>