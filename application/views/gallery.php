<!DOCTYPE HTML>
<html>

<?php $this->load->view("header.php"); ?>


<section id="main">


	<header id="header">
		<div>Zimage <span>Design for INFS7202</span></div>
	</header>


	<section id="galleries">

		<div class="gallery">

			<header>
				<h1>Gallery</h1>
				<ul class="tabs">
					<li><a href="<?php echo $this->config->item("base_url")."picture/gallery" ?>" data-tag="all" class="button active">All</a></li>
					<li><a href="<?php echo $this->config->item("base_url")."picture/gallery/nature" ?>" data-tag="nature" class="button">Nature</a></li>
					<li><a href="<?php echo $this->config->item("base_url")."picture/gallery/animal" ?>" data-tag="animal" class="button">Animal</a></li>
					<li><a href="<?php echo $this->config->item("base_url")."picture/gallery/car" ?>" data-tag="car" class="button">Car</a></li>
				</ul>
			</header>

			<div class="content">
				<?php foreach ($list as $l){?>
					<div class="media all nature">
						<a href="<?php echo $this->config->item("base_url")."picture/detail/".$l['id']; ?>">
							<img src="<?php echo substr($l["url"],strpos($l["url"],'.')+1);?>" alt="" title="This right here is a caption."/>
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>


	<?php $this->load->view("contact.php"); ?>

	<footer id="footer">
		<div class="copyright">
			&copy; INFO 7202 Design: <a href="my.uq"></a>. GROUP: <a href="*">WEI.ZHOU XINGYI.LI YUNXIAO,LI</a>.
		</div>
	</footer>
</section>
</div>

<?php $this->load->view("header.php"); ?>

</body>
</html>
