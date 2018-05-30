<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Zimage</title>
	<link rel="shortcut icon" type="image/png" href="/public/images/icon.png">
	<link rel="stylesheet" href="/public/assets/css/main.css" />
	<script src="/public/assets/js/jquery.min.js"></script>
	<script src="/public/assets/js/jquery.min.js"></script>
<!--	<script src="/public/assets/js/jquery.poptrox.min.js"></script>-->
	<script src="/public/assets/js/jquery.scrolly.min.js"></script>
	<script src="/public/assets/js/skel.min.js"></script>
	<script src="/public/assets/js/util.js"></script>
	<script src="/public/assets/js/main.js"></script>

</head>
<body>
<div class="page-wrap">


	<nav id="nav">
		<ul>
			<li><a href="<?php echo $this->config->item("base_url"); ?>action/personal" class="">
					<?php $this->load->library('session');if(isset($_SESSION["user"]))echo $_SESSION["user"]["username"];?>
				</a>
			</li>
			<li><a href="<?php echo $this->config->item("base_url"); ?>action/logout" class="">
					<?php $this->load->library('session');if(isset($_SESSION["user"]))echo "LOGOUT";?>
				</a>
			</li><br><br>
			<li><a href="<?php echo $this->config->item("base_url"); ?>home/home" class="active">HOME</a></li>
			<li><a href="<?php echo $this->config->item("base_url"); ?>picture/gallery">GALLERY</a></li>
			<li><a href="<?php echo $this->config->item("base_url"); ?>home/about_us">ABOUTUS</a></li>
			<li><a href="<?php echo $this->config->item("base_url"); ?>upload/index"> UPLOAD</a></li>
			<li><a href="<?php echo $this->config->item("base_url"); ?>action/index">LOGIN</a></li>
		</ul>
	</nav>
