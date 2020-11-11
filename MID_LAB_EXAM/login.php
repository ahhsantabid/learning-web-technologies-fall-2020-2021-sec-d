<?php
	/**
     * @author Ahsan Tabit
     */
	session_start();

	if(isset($_COOKIE['loggedin_user'])) {
		header('Location:user_home.php');
		exit;
	}

	$registered = array();

	if(isset($_SESSION['register'])) {
		$registered = $_SESSION['register'];
	
		unset($_SESSION['register']);
	}

	$errors = array();

	if(isset($_POST['submit'])) {
		$id = isset($_POST['id']) ? trim($_POST['id']) : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
		
		if(empty($id)) {
			$errors[] = 'Username is required';
					
		} else if(!isset($_SESSION['users']) || !isset($_SESSION['users'][$id]) || empty($user = $_SESSION['users'][$id])) {
			$errors[] = 'Username not Found';
		}

		if(empty($password)) {
			$errors[] = 'Password is required';
		} else if(!empty($user) && $user['password']!=$password) {
			$errors[] = 'Password didn\'t match';
		}

		if(empty($errors)) {
			// Store Cookie in Browser
			setcookie('loggedin_user', $id, time()+21600);
			header("Location: user_home.php");
            exit;
		}
	}
?>






<center>
<form>
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<fieldset>
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text"><br/>                               
					Password<br/>
					<input type="password">
					<br /><hr/>
					<input type="button" value="Login">
					<a href="registration.html">Register</a>
				</fieldset>
				<?php if(!empty($registered)) : ?>
					<fieldset style="width: 350px" align="left">
                        <legend style="color: green">
                            <b>Successful</b>
                        </legend>
                        <p>Hi <?= $registered['name'] ?>,<br>Wellcome</p>
                    </fieldset>
					<br>
					<?php endif ?>
			</td>
		</tr>                                
	</table>
</form>
</center>