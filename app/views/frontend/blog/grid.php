	  <!-- ==================================================
							welcome-page
      ================================================== -->
	  <section class="welcome-page sec-padding text-center p-relative o-hidden bg-gray">
	  	<div class="container">
	  		<div class="row welcome-text sec-padding flex-center">
	  			<div class="col-md-12 mb-20px z-index-1">
	  				<h1 class="color-blue">Our Narrative</h1>
	  			</div>
	  			<div class="col-md-8 text-center">
	  				<img alt="img" src="<?php echo ROOT; ?>/public/frontend/images/45.png" class="ml-auto mr-auto">
	  			</div>
	  		</div>
	  	</div>
	  	<div class="pattern p-absolute">
	  	</div>
	  </section>
	  <!-- ==================================================
							End welcome-page
      ================================================== -->

	  <!-- ==================================================
							blog-details
      ================================================== -->
	  <section class="blog-details blog-list sec-padding">
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-8">
	  				<div class="row">

	  					<?php foreach ($this->ourPosts as $post) : ?>
	  						

	  							<div class="col-md-6">
	  								<div class="blog-box mb-50px">
	  									<div class="o-hidden">
	  										<img alt="img" src="<?php echo ROOT."/public/blog_imgs/".$post['blog_thumbnail']; ?>" class="transition-4">
	  									</div>
	  									<p class="mt-20px">
	  										<span class="mr-10px"><i class="fa fa-user color-blue"></i> By Admin</span>
	  										<span><i class="fa fa-tag color-blue"></i> <a href="#0" class="color-333 color-blue-hvr">Design</a>, <a href="#0" class="color-333 color-blue-hvr">Development</a></span>
	  									</p>
	  									<h4 class="mt-10px mb-15px"><a class="color-333 fw-600 color-blue-hvr" href="<?= ROOT . "/blog/read/" . $post['slug'] ?>"><?= $post['blog_title'] ?></a> </h4>
										  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incididunt labore et dolore magna aliqua veniam.</p> -->
										  <?= $this->miniText($post['blog_content']); ?> 
	  									<a class="read transition-5 o-hidden d-inline-block p-relative pl-20px mt-10px mr-15px color-aaa color-blue-hvr" href="<?= ROOT . "/blog/read/" . $post['slug'] ?>"><span class="line transition-4 p-absolute d-inline-block bg-333"></span> Read More</a>
	  								</div>
	  							</div>
	  						</tr>
	  					<?php endforeach; ?>

	  					




	  				</div>
	  				<ul class="list-unstyled page-numbers">
	  					<li class="d-inline-block text-center mr-5px" mb-10px>
	  						<a href="#" class="color-blue color-fff-hvr bg-blue-hvr transition-2 d-inline-block radius-50 active">1</a>
	  					</li>
	  					<li class="d-inline-block text-center mr-5px mb-10px">
	  						<a href="#" class="color-blue color-fff-hvr bg-blue-hvr transition-2 d-inline-block radius-50">2</a>
	  					</li>
	  					<li class="d-inline-block text-center mr-5px mb-10px">
	  						<a href="#" class="color-blue color-fff-hvr bg-blue-hvr transition-2 d-inline-block radius-50">3</a>
	  					</li>
	  					<li class="d-inline-block mb-10px">
	  						<span class="color-blue">...</span>
	  					</li>
	  					<li class="d-inline-block text-center mb-10px">
	  						<a href="#" class="color-blue color-fff-hvr bg-blue-hvr transition-2 d-inline-block radius-50">
	  							<i class="fa fa-angle-right"></i>
	  						</a>
	  					</li>
	  				</ul>
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