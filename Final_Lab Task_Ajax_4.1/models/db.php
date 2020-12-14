<?php

function getConnection($servername, $dbuser, $dbpass, $database){

		$conn = mysqli_connect($servername, $dbuser, $dbpass, $database);
		return $conn;
    }
    

function validateUser($id, $password){
    
    $sql = "select * from user where id = '$id' AND password = '$password'";
    
    $conn = getConnection('localhost', 'root', '', 'elearning');
    
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(count($row) > 0){
        
        if($row['user_type']=="User"){
            
           
            return true;
            
        }
        
        elseif($row['user_type']=="Admin"){
            
            
            return true;
            
        }
        
        
    }
    else{
        
        return false;
        
    }
    
}

function registrationUser($id, $name, $password, $email, $userType){
    
    $conn = getConnection('localhost', 'root', '', 'elearning');
    $sql = "insert into user (id, name, password, email, user_type) values ('$id', '$name', '$password', '$email', '$usertype')";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    else{
        
        return false;
        
    }
    
}

function userInformation($username){

		$conn = getConnection('localhost', 'root', '', 'elearning');
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);

		$userInfo =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($userInfo, $data);
		}

		return $userInfo;
	}

function updatePassword($id, $password){
    
    $conn = getConnection('localhost', 'root', '', 'elearning');
    $sql = "update user set password = '$password' where id = '$id'";
    
    if(mysqli_query($conn, $sql)){
        
        return true;
        
        
    }
    
    else{
        
        return false;
        
    }
}

?>