<section id="contact">

	<div class="social column">
		<h3>Disclaimer</h3>
		<p>For the accuracy or completeness of the information and materials provided on this website, this
			website makes no representations or guarantees.</p>
		<p>The Website is not responsible for any loss or damage caused by your access or inability to access
			the Website or rely on the information provided by this Website or its accompanying instructions or
			documents.</p>
		<h4>If you want to learn more about the disclaimer, please download the file</h4>
		<a href="<?php echo $this->config->item("base_url"); ?>home/get_pdf"><input type="button" value="Download!"></a>
	</div>


	<div class="column">
		<h3>Get in Touch</h3>
		<form action="#" method="post">
			<div class="field half first">
				<label for="name">Name</label>
				<input name="name" id="name" type="text" placeholder="Name">
			</div>
			<div class="field half">
				<label for="email">Email</label>
				<input name="email" id="email" type="email" placeholder="Email">
			</div>
			<div class="field">
				<label for="message">Message</label>
				<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
			</div>
			<ul class="actions">
				<li><input value="Send Message" class="button" type="submit"></li>
			</ul>
		</form>
	</div>
</section>
