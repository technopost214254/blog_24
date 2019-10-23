<?php include'include_head.php'; ?>


<body>

<div class="super_container">

	<!-- Header -->
<?php include 'include_header.php'; ?>

<!-- Menu -->
<?php include 'include_menu.php'; ?>
	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>assets//images/regular.jpg" data-speed="0.8"></div>
		<div class="home_content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<!-- Post Comment -->
						<div class="post_comment">
							<div class="contact_form_container">
								<form action="#">
									<input type="text" class="contact_input contact_input_name" placeholder="Your Name" required="required">
									<input type="email" class="contact_input contact_input_email" placeholder="Your Email" required="required">
									<textarea class="contact_text" placeholder="Your Message" required="required"></textarea>
									<button type="submit" class="contact_button">Send Message</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
	</div>

	<!-- Footer -->

<?php include 'include_footer.php'; ?>
</div>
<?php include 'include_js.php'; ?>

</body>
</html>