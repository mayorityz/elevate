<!-- ==================================================
							welcome-page
      ================================================== -->
<section class="welcome-page register-page sec-padding pb-150px p-relative o-hidden bg-gray h-auto">
	<div class="container">
		<div class="row welcome-text sec-padding flex-center">
			<div class="col-md-6 mb-50px">
				<img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/29.png" class="ml-auto mr-auto">
			</div>
			<div class="col-md-6">
				<h1>Sign Up </h1>
				<!-- <h6 class="fw-400 mt-20px mb-10px color-666">with your social network</h6>
				<a href="<?php echo ROOT; ?>/auth/loginwithlinkedin" class="d-inline-block social p-relative mr-10px mb-10px pl-30px pr-30px pt-10px pb-10px radius-5px color-fff color-fff-hvr google"><i class="fa fa-linkedin p-absolute"></i> <span class="pl-20px">LinkedIn</span> </a>
				<a href="<?php echo ROOT; ?>/auth/registerwithfacebook" class="d-inline-block social p-relative mr-10px mb-10px pl-30px pr-30px pt-10px pb-10px radius-5px color-fff color-fff-hvr facebook"><i class="fa fa-facebook p-absolute"></i> <span class="pl-20px">facebook</span> </a>
				<a href="#0" class="d-inline-block social p-relative mr-10px mb-10px pl-30px pr-30px pt-10px pb-10px radius-5px color-fff color-fff-hvr twitter"><i class="fa fa-twitter p-absolute"></i> <span class="pl-20px">twitter</span> </a> -->

				<!-- <h5 class="fw-400 mt-10px separator p-relative text-center">
					<span class="bg-gray p-relative p-15px z-index-1">Or</span>
				</h5> -->
				<form id="log-in" action="<?php echo ROOT; ?>/auth/newvendor" class="mt-30px regform">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group p-relative">
								<input type="text" placeholder="Your Organization's Name" name="organization" required class="d-block w-100">
								<i class="fa fa-user fs-20 color-blue p-absolute"></i>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group p-relative">
								<input type="email" placeholder="Your Email" name="email" required class="d-block w-100">
								<i class="fa fa-envelope fs-20 color-blue p-absolute"></i>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group p-relative">
								<input type="text" placeholder="Your Position In The Firm" name="organization" required class="d-block w-100">
								<i class="fa fa-edit fs-20 color-blue p-absolute"></i>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group p-relative">
								<input type="email" placeholder="Company Email" name="c_email" required class="d-block w-100">
								<i class="fa fa-envelope fs-20 color-blue p-absolute"></i>
							</div>
						</div>
					</div>
					<div class="form-group p-relative">
						<input type="password" placeholder="Your Password" name="password" required class="d-inline-block w-100">
						<i class="fa fa-lock fs-20 color-blue p-absolute"></i>
					</div>
					<div class="form-group p-relative">
						<input type="password" placeholder="Repeat Your Password" name="password2" required class="d-inline-block w-100">
						<i class="fa fa-lock fs-20 color-blue p-absolute"></i>
					</div>
					<div class="form-group mb-30px">
						<input type="checkbox" name="agreed" value="check" class="w-auto h-auto" required> you accept our <a href="#0">Terms of Use</a> and our <a href="#0">Privacy Policy</a>.
					</div>
					<div class="form_alert"></div>
					<button role="button" class="main-btn btn-3 before-gray">Sign Up </button>
				</form>
				<a href="<?php echo ROOT; ?>/auth" class="d-inline-block mt-20px">Already registered? Sign in</a>
			</div>
		</div>
	</div>
	<div class="pattern p-absolute">
	</div>
</section>
<!-- ==================================================
							End welcome-page
      ================================================== -->