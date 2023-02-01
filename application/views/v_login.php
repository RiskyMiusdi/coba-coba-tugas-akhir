<!-- Home -->
<div id="home" class="hero-area">

	<!-- Backgound Image -->
	<div class="bg-image bg-parallax overlay" style="background-image:url(<?php echo base_url() ?>assets/img/home-background.jpg)"></div>
	<!-- /Backgound Image -->

	<div class="home-wrapper">
		<div class="container">
			<div class="row">

				<h1 class="white-text" align="center">Form Login</h1>


				<div class="col-md-12">
					<?php
					if ($this->session->flashdata('error') != '') {
						echo '<div class="alert alert-danger" role="alert">';
						echo $this->session->flashdata('error');
						echo '</div>';
					}
					?>
					<?php
					if ($this->session->flashdata('success_register') != '') {
						echo '<div class="alert alert-info" role="alert">';
						echo $this->session->flashdata('success_register');
						echo '</div>';
					}
					?>
					<form method="post" action="<?php echo base_url(); ?>index.php/c_login/proses">
						<div class="form-group">
							<label class="white-text" for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label class="white-text" for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
						<button type="submit" class="main-button icon-button">Login</button>
					</form>

				</div>
			</div>
		</div>

	</div>
	<!-- /Home -->



	</body>

	</html>