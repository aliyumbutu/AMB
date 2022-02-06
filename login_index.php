
 <?php   
    require_once("loginTitleBar.php");

    ?>

</head>
<body>
<div class="container">
	<h1 class="text-center" style="margin-top:30px;">Welcome to  Mentor07</h1>
	<hr>
	<div class="row justify-content-md-center">
		<div class="col-md-5">
			<?php
				if(isset($_SESSION['error'])){
					echo "
						<div class='alert alert-danger text-center'>
							<i class='fas fa-exclamation-triangle'></i> ".$_SESSION['error']."
						</div>
					";

					//unset error
					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success'])){
					echo "
						<div class='alert alert-success text-center'>
							<i class='fas fa-check-circle'></i> ".$_SESSION['success']."
						</div>
					";

					//unset success
					unset($_SESSION['success']);
				}
			?>
			<div class="card">
				<div class="card-body">
				    <h5 class="card-title text-center">Sign in your account</h5>
				    <hr>
				    <form method="POST" action="login.php">
				    	<div class="form-group row">
						  	<label for="email" class="col-3 col-form-label">Email</label>
						  	<div class="col-9">
						    	<input class="form-control" type="email" id="email" name="email" value="<?php echo (isset($_SESSION['email'])) ? $_SESSION['email'] : ''; unset($_SESSION['email']) ?>" placeholder="input email" required>
						  	</div>
						</div>
						<div class="form-group row">
						  	<label for="password" class="col-3 col-form-label">Password</label>
						  	<div class="col-9">
						    	<input class="form-control" type="password" id="password" name="password" value="<?php echo (isset($_SESSION['password'])) ? $_SESSION['password'] : ''; unset($_SESSION['password']) ?>" placeholder="input password" required>
						  	</div>
						</div>
				    <hr>
				    <div>
				    	<button type="submit" class="btn btn-primary" name="login"><i class="fas fa-sign-in-alt"></i> Login</button>
				    	<a href="register_form.php">Register a new account</a>
				    </div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
