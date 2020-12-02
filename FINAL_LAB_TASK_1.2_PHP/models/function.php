<?php

	require_once('db.php');

	function validate($user){
			
		$conn = getConnection();
		$sql = "select * from employee where username='{$user['username']}' and password='{$user['password']}'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		if(count($row) > 0){
			return true;
		}else{
			return false;
		}

	}


	function getById(){

		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}


	function getAllUsers(){

		$conn = getConnection();
		$sql = "select * from employee";
		$result = mysqli_query($conn, $sql);

		$user =[];

		while($data = mysqli_fetch_assoc($result)){
			array_push($user, $data);
		}

		return $user;
	}




	function deleteUsers($id){
		$conn = getConnection();
		$sql = "delete from employee where id=$id";
		$status = mysqli_query($conn, $sql);
		if($status){
			return true;
		}else{
			return false;
		}
	}



		function updateUsers($id,$user){


			$conn = getConnection();
			$sql = "update  emoloyee set username = '{$user['username']}', password = '{$user['password']}',email ='{$user['email']}', type = '{$user['type']}' where id = $id";
	
			$status = mysqli_query($conn, $sql);
	
			if($status){
	
				return true;
			}
	
			else{
				
				return false;
			}
	
		}

	

?>