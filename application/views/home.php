<!DOCTYPE HTML>

<html>
<?php $this->load->view("header.php");?>


				<section id="main">

						<section id="banner">
							<div class="inner">
								<h1>Zimage</h1>
								<p>WE PROVIDE THE BEST <a href="*">PHOTO</a></p>
								<ul class="actions">
									<li><a href="#galleries" class="button alt scrolly big">Continue</a></li>
								</ul>
							</div>
						</section>


				<form method="get" id="searchform" action="/index.php/home/home/search" >
					<fieldset class="search">
						<input type="hidden" name="search" value="search">
						<input type="text" class="box" id="tagname" name="tagname"/>
						<button class="search-button" title="Submit Search">Search</button>
					</fieldset>
				</form>

						<section id="galleries">

								<div class="gallery">
									<header class="special">
										<h2>What's New</h2>
									</header>
									<div class="content">
										<?php foreach ($list as $l){?>
											<div class="media">
												<a href="<?php echo $this->config->item("base_url")."picture/detail/".$l['id']; ?>">
													<img src="<?php echo substr($l["url"],strpos($l["url"],'.')+1);?>" alt="" title="This right here is a caption." />
												</a>
											</div>
										<?php } ?>
									</div>
									<footer>
										<a href="<?php echo $this->config->item("base_url"); ?>picture/gallery" class="button big">More detals</a>
									</footer>
								</div>
						</section>


					<?php $this->load->view("contact.php");?>


						<footer id="footer">
							<div class="copyright">
								&copy; INFO 7202 Design: <a href="my.uq"></a>. GROUP: <a href="*">WEI.ZHOU XINGYI.LI YUNXIAO,LI</a>.
							</div>
						</footer>
				</section>
		</div>


	</body>
</html>
