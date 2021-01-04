<?php
    require_once ('../config/function.php');

    if(isLoggedIn()) {
        header("location: home.php");
        exit;
    }

    $errors = array();
    if(isset($_POST['login'])){
        $name=$_POST['name'];
        $password=$_POST['password'];

        if(empty($name)) {
            $errors[] = "User Name is required";
        } else if(empty($user = userByUserName($name))) {
            $errors[] = "User Name not found";
        }

        if(empty($password)) {
            $errors[] = "Password is required";
        } else if (!empty($user) && $user['password']!=$password) {
            $errors[] = "Password doesn't matched";
        }

        if(empty($error)) {
            setLoggedUser($user['name']);
            header('location: home.php');
            exit;
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/web.css">
        <title>Log in</title>
        <h2 class="h" align="center">Welcome to Log In</h2>
    </head>
    <body id="b">
        <div id="d">
            <form action="login.php" method="POST" align="center"  onsubmit="return validation()">
                <img src="../asset/log.jpg" alt="login logo" class ="img" align="center" ><br><br>
                <label id="l">User Name</label>
                <input name="name" type="text" class="input" placeholder="Enter your name"><br>

                <label>Password</label>
                <input name="password" type="password" class="input" placeholder="Enter your password"><br>

                <input name="login" type="submit" class="button" value="Login"><br>
                <a href="reg.php"><input name="reg" type="button" class="button" value="Registration"><br>
            </form>
        </div>
        <script type="text/javascript">
         function validation() {
                var name = document.getElementById('name').value,
                    password = document.getElementById('password').value;

                var errors = [];

                if(!name || !(name.length>0)) {
                    errors.push('Name is required');
                }

               

                if(!password ||  !(password.length>0) ) {
                    errors.push('Password is required');
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