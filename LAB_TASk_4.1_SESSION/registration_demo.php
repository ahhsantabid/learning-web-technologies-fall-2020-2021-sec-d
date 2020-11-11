<?php

/**
 * @author ahhsan tabid
 */
session_start();

if(isset($_POST['submit'])){

  $name= isset($_POST['name'])? trim($_POST['name']):'';
 $email=isset($_POST['email'])? trim($_POST['email']):'';
 $password=isset($_POST['password'])? trim($_POST['password']):'';
 $username= isset($_POST['username'])? trim($_POST['username']):'';
 $confirmpassword=isset($_POST['confirmpassword'])? trim($_POST['confirmpassword']):'';
 $gender=isset($_POST['gender'])? trim($_POST['gender']):'';
 $day=isset($_POST['day'])? trim($_POST['day']):'';
 $month=isset($_POST['month'])? trim($_POST['month']):'';
 $year=isset($_POST['year'])? trim($_POST['year']):'';


 $error=[];

 if(empty($_POST['name'])){
    $error['name']="required name!";
 }
 elseif(strlen($_POST['name'])<4){
     $error['name']="name must be more than 4 character!";
 }
 if(empty($_POST['username'])){
    $error['username']="required username!";
 }
 elseif(strlen($_POST['username'])<4){
     $error['username']="invaild username!";
 }
 else if(isset( $_SESSION['user']) && isset($_SESSION['user']['username'])){
     $error['username']="username already exist!";
 }
 if(empty($_POST['email'])){
    $error['email']="required email";
 }
 elseif(strpos($_POST['email'],".")!=false || strpos($_POST['email'],"@")!=false ) {
     $error['email']="invaild email address";
 }
 if(empty($_POST['password'])){
     $error['password']="Password required!";

 }
 else if(strlen($_POST['password'])){
     $error['password']="invalid password!";
 }

 if(empty($_POST['confirmpassword'])){
    $error['confirmpassword']="empty password!";

}
else if($_POST['confirmpassword']!=$_POST['password']){

    $error['confirmpassword']="Password doesn't match! ";
}
 if(empty($_POST['gender'])){
    $error['gender']="gender required!";

}
if(empty($_POST['day'] )||empty($_POST['month'])|| empty($_POST['year'])){
    //$error['day' 'month' 'year']="Required Date of birth";



}
else if(!is_numeric($_POST['day']) ||!is_numeric($_POST['month']) ||!is_numeric($_POST['year']) ){
  //  $error['day','month','year']="Must be Numeric";
}
else if(strlen($day)!=2 ||strlen($month)!=2 ||!is_numeric($monthstrlen($year)!=4) ){
   // $error['day','month','year']="invalid DOB";
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
                                        <td>: <input type="text" name="name" id="name1" placeholder="Enter your name" value="<?php if(isset($name)) echo $name ?>"> 
                                        <span style="color:red;">
                                    <?php
                                     if(isset($error['name'])){
                                         echo $error['name'];
                                       
                                     }
                                     ?>

                                    </span>
                                        </td>
                                    </tr>
                                   

                                    
                                    
                                   
                                  <tr>
                                        <td><label for="username1">User Name</label> </td>
                                        <td>: <input type="text" name="username" id="username1" placeholder="Enter your username" value="<?php if(isset($username)) echo $username ?>">
                                        <span>
                                    <?php
                                     if(isset($error['username'])){
                                         echo $error['username'];
                                       
                                     }
                                     ?>

                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <label for="password2">Password</label></td>
                                        <td>: <input type="password" name="password" id="password2" placeholder="Enter your password" value="<?php if(isset($password)) echo $password ?>">
                                        <span>
                                    <?php
                                     if(isset($error['password'])){
                                         echo $error['password'];
                                       
                                     }
                                     ?>

                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="password1">confirm Password</label> </td>
                                        <td>: <input type="password" name="confirmpassword" id="password1" placeholder="Enter your password" value="<?php if(isset($confirmpassword)) echo $confirmpassword ?>">
                                        <span>
                                    <?php
                                     if(isset($error['confirmpassword'])){
                                         echo $error['confirmpassword'];
                                       
                                     }
                                     ?>

                                    </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>: <input type="radio" name="gender" >male
                                            : <input type="radio" name="gender" >female
                                            : <input type="radio" name="gender" >others
                                            <span>
                                    <?php
                                     if(isset($error['gender'])){
                                         echo $error['gender'];
                                       
                                     }
                                     ?>

                                    </span>
                                            
                                        </td>
                                    </tr>
                                    
                                       <tr >
                                           <td align="center" colspan="2" >
                                     <fieldset height="30">
                                            
                                                <legend><b>DATE OF BIRTH</b></legend>
                                               
                                                    <pre>  dd      mm     yyyy</pre>
                                                    <input type="tel" name="day" size="1"><b> /</b>
                                                    <span>
                                    <?php
                                     if(isset($error['day'])){
                                         echo $error['day'];
                                       
                                     }
                                     ?>

                                    </span>
                                                      <input type="tel" name="month" size="1"><b> /</b>
                                                      <span>
                                    <?php
                                     if(isset($error['month'])){
                                         echo $error['month'];
                                       
                                     }
                                     ?>

                                    </span>
                                                      <input type="tel" name="year" size="1">
                                                      <span>
                                    <?php
                                     if(isset($error['year'])){
                                         echo $error['year'];
                                       
                                     }
                                     ?>

                                    </span>
                                                   
                                              
                                
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
