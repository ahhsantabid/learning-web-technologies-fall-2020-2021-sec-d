<?php

require_once('../models/db.php');

$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$email = $_POST['email'];
$userType = $_POST['userType'];

if(!empty($id) and !empty($name) and !empty($password) and !empty($cpassword) and !empty($email) and !empty($userType)){
    
    if($password == $cpassword){
        
        if(registrationUser($id, $name, $password, $email, $userType)){
            
            echo "Registration Successful";
            
        }else{
            
            echo "Failed to register";
        }
        
    }else{
        
        echo "Password did not match";
        
    }
    
}else{
    
    echo "Missing information";
    
}

?>