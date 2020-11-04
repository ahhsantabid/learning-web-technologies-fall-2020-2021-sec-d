<?php

if(isset($_REQUEST['submit'])){
    
    $name = $_REQUEST['name'];
    echo "Name: , ".$name;
    
    if(!empty($name)){
        
        if($name[0]==" "){
            
            header('location: name.html?msg=invalid_name');
            
        }
        
        else{
            
            $nameTest = explode(" ", $name);
        if(count($nameTest) >= 2){
            
            $notAccepted = array('.','-' ,'0', '1', '2', '3', 
                            '4', '5', '6', '7', '8', '9',);
            
            for($i = 0; $i < count($notAccepted); $i++){
                
                if(strpos($name, $notAccepted[$i])==true){
                    header('location: name.html?msg=invalid_name');
                    break;
                }
                
            }
            
            echo "Name: , ".$name;
            
        }
            
            else{
                
                header('location: name.html?msg=invalid_name');
                
            }
            
        }
        
        
        
    }
    
    else{
        
        header('location: name.html?msg=null_name');
        
    }
    
    
}

else{
    
    header('location: name.html?msg=error');
    
}



?>