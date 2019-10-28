<!-- ==================================================
							blog-details
      ================================================== -->
<section class="blog-details sec-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="mt-25px mb-25px">
					<?php if (isset($_GET['status']) && $_GET['status'] == true) : ?>
						<div class="alert alert-primary text-center">
							Thanks For Your Response...
						</div>
					<?php endif; ?>
					<img alt="img" src="<?php echo ROOT . "/public/blog_imgs/" . $this->read[0]['blog_thumbnail']; ?>" class="w-100">
					<p class="mt-20px">
						<span class="mr-10px"><i class="fa fa-user color-blue"></i> By Admin</span>
						<span class="mr-10px"><i class="fa fa-clock-o color-blue"></i> <?php echo $this->read[0]['post_date'] ?></span>
						<span class="mr-10px"><i class="fa fa-comments-o color-blue"></i> 2 Comments</span>
						<span><i class="fa fa-tag color-blue"></i> <a href="#0" class="color-333 color-blue-hvr">Technologhy</a>, <a href="#0" class="color-333 color-blue-hvr">Design</a></span>
					</p>
					<?php echo  $this->source($this->read[0]['blog_content']); ?>

					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr mr-10px mb-10px pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Moblie</span></a>
					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr mr-10px mb-10px pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Work</span></a>
					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Marketing</span></a>
					<h5 class="mb-0px mt-20px social-share">
						<span class="d-inline-block mr-10px">Share: </span>
						<a href="#0" class="fs-16 text-center color-fff bg-blue color-fff-hvr bg-333-hvr d-inline-block mr-10px radius-50"><i class="fa fa-facebook"></i> </a>
						<a href="#0" class="fs-16 text-center color-fff bg-blue color-fff-hvr bg-333-hvr d-inline-block mr-10px radius-50"><i class="fa fa-twitter"></i> </a>
						<a href="#0" class="fs-16 text-center color-fff bg-blue color-fff-hvr bg-333-hvr d-inline-block radius-50"><i class="fa fa-google-plus"></i> </a>
					</h5>
					<!-- ================================================== -->
					<hr class="mt-50px mb-50px">
					<!-- ================================================== -->
					<h4 class="mb-30px"><?php echo count($this->res) ?> Comment(s)</h4>
					<?php if (count($this->res) != 0) : ?>
						<?php foreach ($this->res as $response) : ?>
							<div class="comment-box radius-5px p-15px pt-50px pb-50px mb-20px p-relative">
								<img alt="img" src="<?php echo ROOT; ?>/public/backend/images/profileimgs/placeholder_2.jpg" class="radius-50 p-absolute">
								
								<div class="pl-95px">
									<h5 class="mb-0px"><?= $response['r_name']; ?></h5>
									<span class="fs-15 color-aaa"><i class="fa fa-clock-o"></i> <?= $response['r_date']; ?></span>
									<p class="mt-20px"><?= $response['response']; ?></p>
								</div>
							</div>
						<?php endforeach; ?>
					<?php endif; ?>
					<!-- ================================================== -->
					<hr class="mt-50px mb-50px">
					<!-- ================================================== -->
					<h4 class="mb-30px">Leave a Comment</h4>
					<form id="comment-form" class="mt-30px" method="POST" action="<?php echo ROOT . "/blog/replypost/" . $this->read[0]['slug'] ?>">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group p-relative">
									<input name="r_name" type="text" placeholder="Your Name" required class="d-block w-100">
									<i class="fa fa-user fs-20 color-blue p-absolute"></i>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group p-relative">
									<input name="r_email" type="email" placeholder="Your Email" required class="d-block w-100">
									<i class="fa fa-envelope fs-20 color-blue p-absolute"></i>
								</div>
							</div>
						</div>
						<div class="form-group p-relative">
							<textarea name="response" placeholder="your comment" class="d-block w-100 pt-15px" required></textarea>
							<i class="fa fa-comments-o fs-20 color-blue p-absolute"></i>
						</div>
						<button role="button" class="main-btn btn-3">Post Comment </button>
					</form>
				</div>
			</div>
			<div class="col-md-4">
				<div class="mt-25px mb-25px">
					<form id="search-form" class="mb-50px">
						<div class="form-group p-relative">
							<input type="text" placeholder="Search ...." required class="d-block w-100 radius-0px">
							<button role="search" class="p-absolute d-inline-block"><i class="fa fa-search fs-20 color-blue"></i> </button>
						</div>
					</form>
					<h4 class="mb-20px">Categories</h4>
					<ul class="categories-list list-unstyled font-Poppins mb-50px">
						<li class="pb-10px mb-10px">
							<a href="#0" class="color-666 color-blue-hvr">Technology</a>
							<span class="text-center float-right radius-50 color-blue">3</span>
						</li>
						<li class="pb-10px mb-10px">
							<a href="#0" class="color-666 color-blue-hvr">Design</a>
							<span class="text-center float-right radius-50 color-blue">4</span>
						</li>
						<li class="pb-10px mb-10px">
							<a href="#0" class="color-666 color-blue-hvr">Web</a>
							<span class="text-center float-right radius-50 color-blue">8</span>
						</li>
						<li class="pb-10px mb-10px">
							<a href="#0" class="color-666 color-blue-hvr">Development</a>
							<span class="text-center float-right radius-50 color-blue">2</span>
						</li>
					</ul>
					<h4 class="mb-20px">Tags</h4>
					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr mr-10px mb-10px pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Moblie</span></a>
					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr mr-10px mb-10px pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Work</span></a>
					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr mr-10px mb-10px pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Computer</span></a>
					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr mr-10px mb-10px pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Branding</span></a>
					<a href="#0"><span class="d-inline-block color-blue color-fff-hvr  bg-gray bg-blue-hvr pr-15px pl-15px pt-5px pb-5px radius-5px transition-2"># Marketing</span></a>
					<h4 class="mb-20px mt-50px">Popular Posts</h4>
					<div class="row mb-20px">
						<div class="col-md-4 mb-15px">
							<img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/head.jpg">
						</div>
						<div class="col-md-8">
							<h5 class="mb-7px"><a class="color-333 color-blue-hvr" href="#0">The best creativity is the result of good work habits</a> </h5>
							<p><i class="fa fa-clock-o color-blue"></i> 15 May, 2018</p>
						</div>
					</div>
					<div class="row mb-20px">
						<div class="col-md-4 mb-15px">
							<img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/blog-2.jpg">
						</div>
						<div class="col-md-8">
							<h5 class="mb-7px"><a class="color-333 color-blue-hvr" href="#0">Each of us has our own work to do, our own path to walk</a> </h5>
							<p><i class="fa fa-clock-o color-blue"></i> 15 May, 2018</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 mb-15px">
							<img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/blog-3.jpg">
						</div>
						<div class="col-md-8">
							<h5 class="mb-7px"><a class="color-333 color-blue-hvr" href="#0">Digital without data might as well not be digital</a> </h5>
							<p><i class="fa fa-clock-o color-blue"></i> 15 May, 2018</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==================================================
							End blog-details
      ================================================== -->


<div class="container">
	<hr>
</div>