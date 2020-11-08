<!DOCTYPE html>
/**
 * @author ahhsan tabid
 */
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
       
            <style> 
                body>table,body>table>tr,body>table>th {
                    border: 1px solid black;
                    border-collapse: collapse;
                }
            </style>
            <table border="1" width="600" height="70" align="center" cellpadding="15" cellspaceing="0">
                <tr ">
                    <td align="left" style="border-right: 0; padding: 10px 15px;">
                        <img src="home_logo.png" alt="home_logo" width="150" height="40" >
                    </td>
                    <td align="right" style="border-left: 0;padding: 10px 15px;" >
                        <a href="index.php"> Home</a>|
                        <a href="login.php">Login</a>|
                        <a href="registration.php">Registration</a>
                    </td>
                </tr>
                 <tr>
                     <td colspan="2" align="left">
                <fieldset style="width:400px ;">
                    <legend><b>Login</b></legend>
                    <form method="POST" align="left">
                        <table>
                            <tr>
                                <td><label for="name1">Name</label></td>
                                
                                <td> : <input type="text" name="name" id="name1" placeholder="Enter your name">
                            </td>
                            </tr>
                            <tr>
                                <td><label for="password1">Password</label></td>
                                <td>: <input type="password" name="password" id="password1" placeholder="Enter your password"></td>
                                
                            </tr>
                           

                        </table>
                        <hr><br>
                        <input type="submit" name="submit" value="Submit">
                        <a href="">Forget Password?</a>
                        
                </fieldset>
            </td>
            </tr>
            <tr >
                <td align="center" colspan="2" style=" padding: 8px 15px;">Copyright &copy; 2017</td>
            </tr>

            </table>

        </form>
    </body>
</html>