<!-- Home -->
<div id="home" class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/home-background.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="home-wrapper">
		<div class="container">
			<div class="row">




				<h1 class="lead white-text" align="center">Form Register</h1>


				< class="card-body">

					<div class="card">
						<div class="card-header">
							Home Page
						</div>
						<div class="card-body">
							<center>
								<h1>Selamat Datang <?php echo $this->session->userdata('nama'); ?></h1>
							</center>
							<hr />
							<a href="<?php echo base_url(); ?>index.php/c_login/logout" class="btn btn-primary btn-lg btn-block">Logout</a>
						</div>
					</div>

			</div>


		</div>
	</div>
</div>

</div>
<!-- /Home -->


<!-- Why us -->
<div id="why-us" class="section">

	<!-- container -->
	<div class="container">

		<!-- row -->
		<div class="row">
			<div class="section-header text-center">
				<h2>Why Edusite</h2>
				<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
			</div>


		</div>
		<!-- /row -->

		<hr class="section-hr">

		<!-- row -->
		<div class="row">

			<div class="col-md-6">
				<h3>Persius imperdiet incorrupte et qui, munere nusquam et nec.</h3>
				<p class="lead">Libris vivendo eloquentiam ex ius, nec id splendide abhorreant.</p>
				<p>No vel facete sententiae, quodsi dolores no quo, pri ex tamquam interesset necessitatibus. Te denique cotidieque delicatissimi sed. Eu doming epicurei duo. Sit ea perfecto deseruisse theophrastus. At sed malis hendrerit, elitr deseruisse in sit, sit ei facilisi mediocrem.</p>
			</div>

			<div class="col-md-5 col-md-offset-1">
				<a class="about-video" href="#">
					<img src="<?php echo base_url() ?>assets/img/about-video.jpg" alt="">
					<i class="play-icon fa fa-play"></i>
				</a>
			</div>

		</div>
		<!-- /row -->

	</div>
	<!-- /container -->

</div>
<!-- /Why us -->





</body>

</html>