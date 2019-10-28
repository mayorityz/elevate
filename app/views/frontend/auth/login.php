<!-- ==================================================
							welcome-page
      ================================================== -->
<section class="welcome-page register-page sec-padding pb-150px p-relative o-hidden bg-gray h-auto">
	<div class="container">
		<div class="row welcome-text sec-padding flex-center">
			<div class="col-md-6 mb-50px">
				<img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/30.png" class="ml-auto mr-auto">
			</div>
			<div class="col-md-6">
				<h1>Log in Now</h1>
				<!-- <h6 class="fw-400 mt-20px mb-10px color-666">with your prefered social account</h6>
				<a href="<?php echo ROOT; ?>/auth/loginwithlinkedin" class="d-inline-block social p-relative mr-10px mb-10px pl-30px pr-30px pt-10px pb-10px radius-5px color-fff color-fff-hvr google"><i class="fa fa-linkedin p-absolute"></i> <span class="pl-20px">LinkedIn</span> </a>
				<a href="#0" class="d-inline-block social p-relative mr-10px mb-10px pl-30px pr-30px pt-10px pb-10px radius-5px color-fff color-fff-hvr facebook"><i class="fa fa-facebook p-absolute"></i> <span class="pl-20px">facebook</span> </a>
				<a href="#0" class="d-inline-block social p-relative mr-10px mb-10px pl-30px pr-30px pt-10px pb-10px radius-5px color-fff color-fff-hvr twitter"><i class="fa fa-twitter p-absolute"></i> <span class="pl-20px">twitter</span> </a>

				<h5 class="fw-400 mt-10px separator p-relative text-center">
					<span class="bg-gray p-relative p-15px z-index-1">Or</span>
				</h5> -->
				<form id="log-in" class="mt-30px mb-20px loginform" method="POST" action="<?php echo ROOT ?>/auth/loginauth">
					<div class="form-group p-relative">
						<input type="email" name="email" placeholder="Your Email" required class="d-block mb-20px">
						<i class="fa fa-envelope fs-20 color-blue p-absolute"></i>
					</div>
					<div class="form-group p-relative">
						<input type="password" name="password" placeholder="Your Password" required class="d-block mb-20px">
						<i class="fa fa-lock fs-20 color-blue p-absolute"></i>
					</div>
					<div class="form_alert"></div>
					<button role="button" class="main-btn btn-3 before-gray">Log In</button>
				</form>
				<a href="#0" data-toggle="modal" data-target=".bd-example-modal-lg">Not a member? Sign up</a>
				<a href="<?php echo ROOT; ?>/auth/lostpassword" class="float-right">Forget my password</a>
			</div>
		</div>
	</div>
	<div class="pattern p-absolute">
	</div>
</section>
<!-- ==================================================
							End welcome-page
      ================================================== -->