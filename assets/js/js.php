	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/jquery.js"></script>    
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/lineandbars.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/dash-charts.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/gauge.js"></script>
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/noty/layouts/topCenter.js"></script>
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/noty/themes/default.js"></script>
	 <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme -->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="<?php echo base_url(); ?>assets/template-master/js/jquery.flexslider.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/admin.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {

			$("#btn-blog-next").click(function () {
				$('#blogCarousel').carousel('next')
			});
			$("#btn-blog-prev").click(function () {
				$('#blogCarousel').carousel('prev')
			});

			$("#btn-client-next").click(function () {
				$('#clientCarousel').carousel('next')
			});
			$("#btn-client-prev").click(function () {
				$('#clientCarousel').carousel('prev')
			});

		});

		$(window).load(function () {

			$('.flexslider').flexslider({
				animation: "slide",
				slideshow: true,
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
</script> 