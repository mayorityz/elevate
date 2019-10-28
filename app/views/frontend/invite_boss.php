<!-- ==================================================
							welcome-page
      ================================================== -->
      <section class="welcome-page register-page sec-padding pb-150px p-relative o-hidden bg-gray h-auto">
	<div class="container">
		<div class="row welcome-text sec-padding flex-center">
			<div class="col-md-6 mb-50px">
				<img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/kl.png" class="ml-auto mr-auto">
			</div>
			<div class="col-md-6">
				<h1>Send An Invite To Your Office.</h1>
				<form id="log-in" class="mt-30px mb-20px" method="POST">
					<div class="form-group p-relative">
						<input type="email" name="email" placeholder="Company Email ..." required class="d-block mb-20px">
						<i class="fa fa-envelope fs-20 color-blue p-absolute"></i>
					</div>
					<div class="form_alert"></div>
					<button role="button" class="main-btn btn-3 before-gray">Send</button>
				</form>
			</div>
		</div>
	</div>
	<div class="pattern p-absolute">
	</div>
</section>
<!-- ==================================================
							End welcome-page
      ================================================== -->