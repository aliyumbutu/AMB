
<?php
	//start PHP session
	session_start();
	$session = $_session['email'];
	echo $session;

	//check if register form is submitted
	if(isset($_POST['register'])){
		//assign variables to post values
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm = $_POST['confirm'];

		//check if password matches confirm password
		if($password != $confirm){
			//return the values to the user
			$_SESSION['username'] = $username;
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['confirm'] = $confirm;

			//display error
			$_SESSION['error'] = 'Passwords did not match';
		}
		else{
			//include our database connection
			include 'conn.php';

			//check if the email is already taken
			$stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email');
			$stmt->execute(['email' => $email]);

			if($stmt->rowCount() > 0){
				//return the values to the user
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['confirm'] = $confirm;
				
				//display error
				$_SESSION['error'] = 'Email already taken';
			}
			else{
				//encrypt password using password_hash()
				$password = password_hash($password, PASSWORD_DEFAULT);

				//insert new user to our database
				$stmt = $pdo->prepare('INSERT INTO users (username, email, password) VALUES (:username, :email, :password)');

				try{
					$stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);

					$_SESSION['success'] = 'User verified. You can <a href="index.php">login</a> now';
				}
				catch(PDOException $e){
					$_SESSION['error'] = $e->getMessage();
				}

			}
			
		}
		
	}
	else{
		$_SESSION['error'] = 'Fill up registration form first';
	}

	header('location: register_form.php');
?>