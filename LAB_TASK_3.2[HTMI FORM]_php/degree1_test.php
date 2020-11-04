<?php

if(isset($_REQUEST['submit'])){
    
    if(isset($_REQUEST['degree'])){
        
        $degree = $_REQUEST['degree'];
        
        for($i = 0; $i < count($degree); $i++){
            
            echo "Degree: ".$degree[$i]."<br>";
            
        }
        
    }
    
    else{
        
        header('location: degree1.html?msg=null_degree');
        
    }
    
}

else{
    
    header('location: degree1.html?msg=error');
    
}

?>