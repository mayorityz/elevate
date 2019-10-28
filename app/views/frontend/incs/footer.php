<!-- ==================================================
							footer-area
      ================================================== -->
<section class="footer-area sec-padding">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
				<div class="mt-25px mb-25px">
					<img src="<?php echo ROOT; ?>/public/main_logo.png" class="mb-20px" alt="img">
					<p class="mb-20px">Having a solid, trusted brand is important for your company to thrive. If your ideal audience doesn’t know or trust your BRAND, how will you make, impact, increase your customer base or even drive sales?</p>
					<a class="main-btn btn-3 btn-green" href="#0" data-toggle="modal" data-target=".bd-example-modal-lg">Get Started</a>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="mt-25px mb-25px links">
					<h4 class="mb-20px">Useful Links</h4>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>" class="color-333 color-green-hvr transition-3">Home</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/features" class="color-333 color-green-hvr transition-3">Features</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/aboutus" class="color-333 color-green-hvr transition-3">About</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/services" class="color-333 color-green-hvr transition-3">Services</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/blog" class="color-333 color-green-hvr transition-3">Our Narrative</a>
					</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="mt-25px mb-25px links">
					<h4 class="mb-20px">Company</h4>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/careers" class="color-333 color-green-hvr transition-3">Career</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/leadership" class="color-333 color-green-hvr transition-3">Leadership</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/contactus" class="color-333 color-green-hvr transition-3">Contact Us</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="<?php echo ROOT ?>/auth" class="color-333 color-green-hvr transition-3">Login</a>
					</h6>
					<h6 class="mb-10px">
						<i class="fa fa-angle-right"></i> <a href="#0" class="color-333 color-green-hvr transition-3" data-toggle="modal" data-target=".bd-example-modal-lg">Register</a>
					</h6>
				</div>
			</div>
			<div class="col-lg-3 col-sm-6">
				<div class="mt-25px mb-25px">
					<h4 class="mb-20px">Contact Info</h4>
					<h6><i class="fa fa-map-marker mr-5px fs-15 color-green bg-gray radius-50 address text-center"></i> 34a Dele Adeyemi, Lekki.</h6>
					<h6><i class="fa fa-phone mr-5px fs-15 color-green bg-gray radius-50 address text-center"></i> +234 704-000-4478</h6>
					<h6 class="mb-30px"><i class="fa fa-envelope mr-5px fs-15 color-green bg-gray radius-50 address text-center"></i> <span style='font-size:16px;'>support@reens-elevate.com</span></h6>
					<a href="fb.me/reenselevate" class="social color-green color-fff-hvr bg-green-hvr bg-gray text-center radius-50 fs-15 d-inline-block"><i class="fa fa-facebook"></i> </a>
					<a href="https://twitter.com/ElevateReens" class="social color-green color-fff-hvr bg-green-hvr bg-gray text-center radius-50 fs-15 d-inline-block"><i class="fa fa-twitter"></i> </a>
					<a href="https://www.linkedin.com/company/reens-elevate/" class="social color-green color-fff-hvr bg-green-hvr bg-gray text-center radius-50 fs-15 d-inline-block"><i class="fa fa-linkedin"></i> </a>
					<a href="#0" class="social color-green color-fff-hvr bg-green-hvr bg-gray text-center radius-50 fs-15 d-inline-block"><i class="fa fa-instagram"></i> </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================================================
							End footer-area
	  ================================================== -->

<!-- modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="myLargeModalLabel">Get Started</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="modal_row">
					<div class="d-none d-sm-block">
						<div id="modal_img"></div>
					</div>
					<div class="modal_form">
						<form action="<?php echo ROOT ?>/auth/redirect" method="post" id="modal_form">
							<div class="form-check modal_radios">
								<input class="form-check-input" type="radio" name="getstarted" id="exampleRadios1" value="option1">
								<label class="form-check-label" for="exampleRadios1">
									I am an Employer
								</label>
							</div>

							<div class="form-check modal_radios">
								<input class="form-check-input" type="radio" name="getstarted" id="exampleRadios2" value="option2">
								<label class="form-check-label" for="exampleRadios2">
									I am an Employee <br>
									<span class="lighter_font">Let your Boss know, You can be supercharged to be the company's best advocate</span>
								</label>
							</div>

							<div class="form-check modal_radios">
								<input class="form-check-input" type="radio" name="getstarted" id="exampleRadios3" value="option3">
								<label class="form-check-label" for="exampleRadios3">
									None of the above <br> <span class="lighter_font">Not to worry we have got you covered!</span>
								</label>
							</div>
						</form>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" id="submit_modal_form">Continue</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /// close modal -->

<!-- ==================================================
							copyright-area
      ================================================== -->
<section class="bg-gray sm-padding text-center">
	<div class="container">
		<h6 class="mb-0px">© 2019 <a href="#">REENS ELEVATE</a> </h6>
	</div>
</section>
<!-- ==================================================
							End copyright-area
      ================================================== -->


<!-- ==================================================
							scroll-top-btn
      ================================================== -->
<div class="scroll-top-btn text-center">
	<i class="fa fa-angle-up fs-20 color-fff bg-green bg-blue-hvr radius-50"></i>
</div>
<!-- ==================================================
							End scroll-top-btn
      ================================================== -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo ROOT; ?>/public/frontend/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/jquery-migrate-3.0.0.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/popper.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/bootstrap.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/jquery.counterup.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/jquery.waypoints.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/lity.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/lightbox.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/scrollIt.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/validator.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/owl.carousel.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/isotope.pkgd.min.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/main.js"></script>
<script src="<?php echo ROOT; ?>/public/frontend/js/wow.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBn-q0VMtMOum5A7HVG86duHeJApbVDv7o"></script>
<?php
if (isset($this->js)) {
	foreach ($this->js as $js) {
		echo '<script src="' . ROOT . '/public/frontend/js/auth/' . $js . '"></script>';
	}
}
?>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5db584a778ab74187a5bc386/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>