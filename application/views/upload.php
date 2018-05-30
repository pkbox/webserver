<!DOCTYPE HTML>
<html>
<?php $this->load->view("header.php"); ?>


<section id="main">

	<header id="header">
		<div>Design <span>FOR CSSE7202 PROJECT</span></div>
	</header>
	<section>
		<div class="inner">
			<header>
				<h1>UPLOAD</h1>
			</header>
			<section class="upload-form">
				<div class="upload-form1">
					<form enctype="multipart/form-data" method="post" name="upform" id="upload" action="/index.php/upload/do_upload">
						<labal for="upload-pic">Upload picture<label>
								<input name="file" type="file"><br>
								Name:<input type="text" value="" name="name" id="name" required="required">
								Tag:<input type="text" value="" name="tagname" id = "tagname" required="required">
								<input type="submit" value="SUBMIT" id="submit"><br>
					</form>
				</div>
			</section>
		</div>
	</section>

	<?php $this->load->view("contact.php"); ?>

	<footer id="footer">
		<div class="copyright">
			&copy; INFS 7202 Design: <a href="my.uq"></a>. GROUP: <a href="*">WEI.ZHOU XINGYI.LI YUNXIAO.LI</a>.
		</div>
	</footer>
</section>
</div>

<?php $this->load->view("footer.php"); ?>

</body>
<script>
	$(document).ready(function(){
		$("#submit").click(function () {
		});
	});
</script>
</html>
