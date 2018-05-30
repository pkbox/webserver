<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Register - Zimage</title>
	<link rel="stylesheet" href="/public/assets/css/loginstyle.css"/>
	<link rel="shortcut icon" type="image/png" href="/public/images/icon.png">
	<script src="/public/assets/js/jquery.min.js"></script>
</head>

<body>
<div class="login-box">
	<img src="/public/images/login.png" class="avatar">
	<h1>Sign Here</h1>
	<!--			    <form action="register" enctype="multipart/form-data" method="post">-->
	<p>Username</p>
	<input type="text" name="username" placeholder="Enter Username" id="username">
	<p>name</p>
	<input type="text" name="name" placeholder="Enter name" id="name">
	<p>Email</p>
	<input type="text" name="email" placeholder="Enter Email" id="email">
	<p>Password</p>
	<input type="password" name="password" placeholder="Enter Password" id="password">
	<p>Comfirm Password</p>
	<input type="password" name="Comfirm Password" placeholder="Enter Comfirm Password" id="repassoword">
	<input type="submit" name="submit" value="SignUp" class="submit">
	<a href="<?php echo $this->config->item("base_url"); ?>home/home">Home page</a>
	<!--			    </form>-->


</div>

<script>
	$(document).ready(function () {

		$(".submit").click(function () {
			var username = $("#username").val();
			var password = $("#password").val();
			var email = $("#email").val();
			var name = $("#name").val();
			var repassword = $("#repassoword").val();
			if (password == repassword) {
				$.ajax({
					url: "/index.php/usercontroller/register",
					type: "post",
					data: {
						"username": username,
						"password": password,
						"email": email,
						"name": name
					},
					dataType: "json",
					success: function (data) {
						console.log(data);

						if (data.status != 1) {
							alert(data.message);
						} else {
							window.location.href = '/index.php/usercontroller/index';
						}
					}
				});
			} else {
				alert("Inconsistent password");
			}
		});
	});
</script>

</body>


</html>
