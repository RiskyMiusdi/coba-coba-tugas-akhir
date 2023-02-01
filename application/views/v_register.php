<!-- Home -->
<div id="home" class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/home-background.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="home-wrapper">
		<div class="container">
			<div class="row">




				<h1 class="lead white-text" align="center">Form Register</h1>


				<div class="card-body">
					<?php
					if ($this->session->flashdata('error') != '') {
						echo '<div class="alert alert-danger" role="alert">';
						echo $this->session->flashdata('error');
						echo '</div>';
					}
					?>
					<form method="post" action="<?php echo base_url(); ?>index.php/c_register/proses">
						<div class="form-group">
							<label for="username" class="lead white-text">Username</label>
							<input type="text" class="container" name="username" id="username" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label for="password" class="lead white-text">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
						<div class="form-group">
							<label for="nama" class="lead white-text">Nama</label>
							<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
						</div>
						<button type="submit" class="main-button icon-button">Register</button>
					</form>
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