<!DOCTYPE HTML>

<html>
<?php $this->load->view("header.php"); ?>

<!-- Main -->
<section id="main">

	<!-- Header -->
	<header id="header">
		<div>Design for INFS7202</div>
	</header>

	<!-- Section -->
	<section>
		<div class="inner">
			<header>
				<h1>Personal Images</h1>
			</header>
			<h2>Details</h2>
			<section class="columns double">
				<?php foreach ($list as $l){?>
					<div class="column">
						<span class="image left special"><img src="<?php echo substr($l["url"],strpos($l["url"],'.')+1);?>" alt=""/></span>

						<h3><?php echo $l["name"]?></h3>
						<p>
							Author: <?php echo $l["author"]?><br>
							Upload Date: <?php echo date("d/m/Y", $l["date"]); ?><br>
							Category: <?php echo $l["tagname"]?><br>
							<button type="button" class="del" pid="<?php echo $l["id"] ?>" uid="<?php echo $l["authorid"] ?>">Delete</button>
						</p>
					</div>
				<?php } ?>
			</section>
		</div>
	</section>

	<!-- Contact -->
	<?php $this->load->view("contact.php"); ?>

	<!-- Footer -->
	<footer id="footer">
		<div class="copyright">
			&copy; INFO 7202 Design: <a href="my.uq"></a>. GROUP: <a href="*">WEI.ZHOU XINGYI.LI YUNXIAO,LI</a>.
		</div>
	</footer>
</section>
</div>

<!-- Scripts -->
<?php $this->load->view("footer.php"); ?>

</body>
<script>
	$(document).ready(function(){
		//登录
		$(".del").click(function () {
			var uid = $(this).attr("uid");
			var pid = $(this).attr("pid");
			$.ajax({
				url: "/index.php/action/delete",
				type: "post",
				data:{"uid":uid,
					"pid":pid
				},
				dataType: "json",
				success: function (data) {
					console.log(data);

					if (data.success!=1) {
						alert(data.message);
					}else{
						window.location.href='/index.php/action/personal';
					}
				}
			});
		});

	});
</script>
</html>
