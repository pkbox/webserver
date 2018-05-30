<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Login - Zimage</title>
		<link rel="stylesheet" href="/public/assets/css/loginstyle.css" />
		<script src="/public/assets/js/jquery.min.js"></script>
		<link rel="shortcut icon" type="image/png" href="/public/images/icon.png">
	</head>

	<body>
		<div class="login-box">
			<img src="/public/images/login.png" class="avatar">
			<h1>Welcome to Zimage!</h1>
<!--			    <form action="login" method="post" enctype="multipart/form-data">-->
			    <p>Username</p>
			    <input type="text" name="username" placeholder="Enter Username" id="username">
			    <p>Password</p>
			    <input type="password" name="password" placeholder="Enter Password" id="password">
			    <input type="submit" name="submit" value="login" class="submit">
			    <a href="#">Forget Password</a><br>
					<a href="<?php echo $this->config->item("base_url"); ?>action/index?status=regist"> Register Now</a></br>
					<a href="<?php echo $this->config->item("base_url"); ?>home/home">Home Page</a>
<!--			    </form>-->
		</div>
	<script>
		$(document).ready(function(){

			$(".submit").click(function () {
				var username = $("#username").val();
				var password = $("#password").val();
				$.ajax({
					url: "/index.php/action/login",
					type: "post",
					data:{"username":username,
						"password":password
					},
					dataType: "json",
					success: function (data) {
						console.log(data);

						if (data.status!=1) {
							alert(data.message);
						}else{
							window.location.href='/index.php/home/home';
						}
					}
				});
			});

		});
	</script>

	</body>






































</html>
