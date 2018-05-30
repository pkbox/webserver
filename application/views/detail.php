<html>
<?php $this->load->view("header.php"); ?>

<section id="main">

	<header id="header">
		<div>Design for INFS7202</div>
	</header>


	<section>
		<div class="inner">
			<header>
				<h1>Image Detail</h1>
			</header>
			<h2><?php echo $list["name"] ?></h2>
			<section class="content">
				<div class="media">
					<a href="<?php echo substr($list["url"], strpos($list["url"], '.') + 1); ?>">
						<span class="image left special"><img
								src="<?php echo substr($list["url"], strpos($list["url"], '.') + 1); ?>"/></a></span>

				</div>


			</section>

	</section>


	<section id="contact">

		<div class="column">
			<p>Author: <?php echo $list["author"] ?><br> Upload Date: <?php echo date("d/m/Y", $list["date"]); ?><br>Category: <?php echo $list["tagname"] ?>
				<br></p>
			<h3>Comment</h3>
<!--			<form action="" method="post" enctype="multipart/form-data">-->
				<input value="<?php if(isset($_SESSION["user"])) echo $_SESSION["user"]["id"] ?>" hidden name="uid" id="uid">
				<input value="<?php echo $list["id"] ?>" hidden  name="pid" id="pid">
				<textarea name="content" id="content" rows="6" placeholder="Message"
						  form="usrform">Enter text here...</textarea>
				<ul><input value="Submit" class="submit" type="submit"></ul>
<!--			</form>-->
		</div>
		<div class="social column">
			<h3>Disclaimer</h3>
			<p>For the accuracy or completeness of the information and materials provided on this website, this website
				makes no representations or guarantees.</p>
			<p>The Website is not responsible for any loss or damage caused by your access or inability to access the
				Website or rely on the information provided by this Website or its accompanying instructions or
				documents.</p>
			<h4>If you want to learn more about the disclaimer, please download the file.</h4>
			<a href=" <?php echo $this->config->item("base_url"); ?>home/get_pdf"><input type="button" value="Download!"></a>
		</div>
	</section>

	<footer id="footer">
		<div class="copyright">
			&copy; INFS7202 Zimage: <a href="my.uq"></a> GROUP: <a href="*">WEI.ZHOU XINGYI.LI YUNXIAO,LI</a>.
		</div>
	</footer>
</section>
</div>


<script>
	$(document).ready(function () {

		$(".submit").click(function () {
			var uid = $("#uid").val();
			var content = $("#content").val();
			var pid = $("#pid").val();
			$.ajax({
				url: "/index.php/comment/do_comment",
				type: "post",
				data: {
					"uid": uid,
					"pid": pid,
					"content":content
				},
				dataType: "json",
				success: function (data) {
					// console.log(data);

					alert(data.message);
					if(data.success == 4){
						window.location.href="/index.php/usercontroller/index";
					}
				}
			});
		});

	});
</script>

</body>
</html>
