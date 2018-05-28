<!DOCTYPE HTML>
<html>

<?php $this->load->view("header.php"); ?>

<!-- Main -->
<section id="main">

	<!-- Header -->
	<header id="header">
		<div>Zimage <span> INFO 7202 PROJECT</span></div>
	</header>

	<!-- Gallery -->
	<section id="galleries">

		<!-- Photo Galleries -->
		<div class="gallery">

			<!-- Filters -->
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
<?php $this->load->view("header.php"); ?>

</body>
</html>
