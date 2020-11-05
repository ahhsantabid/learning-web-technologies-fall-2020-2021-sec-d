<?php

if(isset($_REQUEST['submit'])){
    
    $email = $_REQUEST['email'];
    
    if(!empty($email)){
        
        if(strpos($email, ".")==true){
            
            echo "Valid Email";
            
        }
        
        else{
            header('location: email.html?msg=invalid_email');
        }
        
    }
    
    else{
        header('location: email.html?msg=null_email');
    }
    
}

else{
    
    header('location: email.html?msg=error');
    
}

?>