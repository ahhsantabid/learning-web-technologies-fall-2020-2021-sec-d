<?php

/**
 * @author ahhsan tabid
 */
session_start();

if(isset($_POST['submit'])){

  $name= isset($_POST['name'])? trim($_POST['name']):'';
 $email=isset($_POST['email'])? trim($_POST['email']):'';
 $password=isset($_POST['password'])? trim($_POST['email']):'';
 $username= isset($_POST['username'])? trim($_POST['username']):'';
 $confirmpassword=isset($_POST['confirmpassword'])? trim($_POST['confirmpassword']):'';
 $gender=isset($_POST['gender'])? trim($_POST['gender']):'';
 $day=isset($_POST['day'])? trim($_POST['day']):'';
 $month=isset($_POST['month'])? trim($_POST['month']):'';
 $year=isset($_POST['year'])? trim($_POST['year']):'';


 $error=array();

 if(empty($name)){
    $error[]="required name";
 }
 elseif(strlen($name)<4){
     $error[]="invaild name";
 }
 if(empty($username)){
    $error[]="required username";
 }
 elseif(strlen($username)<4){
     $error[]="invaild username";
 }
 else if(isset( $_SESSION['user']) && isset($_SESSION['user']['username'])){
     $error[]="username already exist";
 }
 if(empty($email)){
    $error[]="required email";
 }
 elseif(strpos($email,".")!=false || strpos($email,"@")!=false ) {
     $error[]="invaild email address";
 }
 if(empty($password)){
     $error[]="empty password";

 }
 else if(strlen($password<4)){
     $error[]="invalid password";
 }

 if(empty($confirmpassword)){
    $error[]="empty password";

}
else if($confirmpassword!=$password)){
    $error[]="incorrect password";
}
 if(empty($gender)){
    $error[]="gender required";

}
if(empty($day )||empty($month)|| empty($year)){
    $error[]="Required Date of birth";

}
else if(!is_numeric($day) ||!is_numeric($year) ||!is_numeric($month) ){
    $error[]="Must be Numeric"
}
else if(strlen($day)!=2 ||strlen($month)!=2 ||!is_numeric($monthstrlen($year)!=4) ){
    $error[]="invalid DOB"
}



if(empty($error)){
    $_SESSION['user']=isset($_SESSION['user'])? $_SESSION['user']:array();

   
$_SESSION['user']['username']=array(

    'name' => $name,
    'email' => $email,
    'password'=> $password,
    'gender' => $gender,
    'dob' => $day."-".$month."-".$year,

);
    $_SESSION['resister']=$username;

header("location:login.php");
exit;


}
}





?>






<!DOCTYPE html>
<html>
    <head>
        <title>Resistration</title>
    </head>
    <body> 
        
       
            <table border="1" width="600" height="120" align="center" cellpadding="15" cellspaceing="0">
                <tr>
                    <td align="left" style="border-right: 0; padding: 10px 15px";>
                        <img src="home_logo.png" alt="home_logo" width="150" height="40" >
                    </td>
                    <td align="right" style="border-left: 0;" >
                        <a href="index.php"> Home</a>|
                        <a href="login.php">Login</a>|
                        <a href="registration.php">Registration</a>
                    </td>
                </tr>
                <tr >
                    <td align="center" colspan="2">
                        <fieldset>
                            <legend>
                                <b>REGISTRATION</b>
                            </legend>
                            <form method="POST">
                                <table cellpadding="4px">
                                    <tr>
                                        <td><label for="name1">Name</label></td>
                                        <td>: <input type="text" name="name" id="name1" placeholder="Enter your name"></td>
                                    </tr>
                                    
                                   
                                    <tr>
                                        <td><label for="username1">User Name</label> </td>
                                        <td>: <input type="text" name="username" id="username1" placeholder="Enter your username"></td>
                                    </tr>
                                    <tr>
                                        <td> <label for="password2">Password</label></td>
                                        <td>: <input type="password" name="password" id="password2" placeholder="Enter your password"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="password1">confirm Password</label> </td>
                                        <td>: <input type="password" name="confirmpassword" id="password1" placeholder="Enter your password"></td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>: <input type="radio" name="gender" >male
                                            : <input type="radio" name="gender" >female
                                            : <input type="radio" name="gender" >others
                                        </td>
                                    </tr>
                                    
                                       <tr >
                                           <td align="center" colspan="2" >
                                     <fieldset height="30">
                                            
                                                <legend><b>DATE OF BIRTH</b></legend>
                                               
                                                    <pre>  dd      mm     yyyy</pre>
                                                    <input type="tel" name="day" size="1"><b> /</b>
                                                      <input type="tel" name="month" size="1"><b> /</b>
                                                      <input type="tel" name="year" size="1">
                                                   
                                              
                                
                                        </fieldset>
                                        
                                      <hr>
                                    </td>
                                    </tr>
                                    

                                    <tr>
                                        <td align="left" colspan="2">
                                        <input type="submit"   value="Submit" name="submit" >
                                        <input type="reset"  value="Reset">
                                     </td>
                                     <br>
                                    

                                      
                                    </tr>
        
                                 </table>
                            </form>
        
                        </fieldset>
                        
                    </td>
                </tr>
                <tr >
                    <td align="center" colspan="2" style="padding:7px 15px;"" >Copyright &copy; 2017</td>
                </tr>
               
            </table>
        
    </body>
</html>
