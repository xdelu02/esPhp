<!DOCTYPE html>
<html lang="en" data-theme="blue">
<?php
	require "head.php";
?>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Signup
					</span>
					<span class="login100-form-title p-b-48">
						<img src="images/logo.png"></img>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nome">
						<span class="focus-input100" data-placeholder="Nome"></span>
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="cognome">
						<span class="focus-input100" data-placeholder="Cognome"></span>
					</div>

                    <div class="validate-input">
						<label style="color: #adadad" for="data">Data di Nascita</label>
						<input class="input100" type="date" name="data" id="data">
					</div>

                    <div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="indirizzo">
						<span class="focus-input100" data-placeholder="Indirizzo"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Signup
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Have an account?
						</span>

						<a class="txt2" href="log.php">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>