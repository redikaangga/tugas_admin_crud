	<link href="<?php echo base_url(); ?>assets/template-master/css/main.css" rel="stylesheet">
	<!-- FIRST ROW OF BLOCKS -->
	<div class="row" style="min-height: 410px; margin-top: 50px">

		<!-- USER PROFILE BLOCK -->
		<div class="col-sm-3 col-lg-3">
			<div class="dash-unit">
				<dtitle>User Profile</dtitle>
				<hr>
				<div class="thumbnail">
					<img src="<?php echo base_url(); ?>assets/file/<?php echo $this->session->userdata('user_session')->foto; ?>" alt="Marcel Newman" class="img-circle">
				</div><!-- /thumbnail -->
				<h1><?php echo $this->session->userdata('user_session')->user; ?></h1>
				<h3><a href="<?php echo base_url(); ?>welcome/act_logout">Logout</a></h3>

			</div>
		</div>

		<!-- DONUT CHART BLOCK -->
		<div class="col-sm-3 col-lg-3">
			<div class="dash-unit">
				<dtitle>Posisi</dtitle>
				<hr>

				<div id="load"></div>
				<!-- <h2>75%</h2> -->

				<canvas id="mycanvas" width="256" height="256"></canvas>
			</div>
		</div>

		<!-- DONUT CHART BLOCK -->
		<div class="col-sm-3 col-lg-3">
			<div class="dash-unit">
				<dtitle>Asal Kota</dtitle>
				<hr>
				
				<div id="space"></div>
				<!-- <h2>65%</h2> -->

				<canvas id="mycanvas" width="256" height="256"></canvas>				
			</div>
		</div>

		<!-- DONUT CHART BLOCK -->
<!-- 		<div class="col-sm-3 col-lg-3">
			<div class="dash-unit">
				<dtitle>Jenis Kelamin</dtitle>
				<hr>

				<div style="height: 158px; width: 158px; margin-top: -120px; margin-left: 50px;">
					<div id="kelamin"></div>
					<h2>65%</h2>

					<canvas id="mycanvas" width="256" height="256"></canvas>
				</div>
			</div>
		</div> -->

		<div class="col-sm-3 col-lg-3">
			<div class="half-unit">
				<dtitle>Local Time</dtitle>
				<hr>
				<div class="clockcenter">
					<digiclock>12:45:25</digiclock>
				</div>
			</div>

		</div>
	</div>