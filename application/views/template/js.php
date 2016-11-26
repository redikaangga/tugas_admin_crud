<!-- INDEX -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/jquery.min.js"></script>    
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/jquery.min.js"></script>     -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/lineandbars.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/dash-charts.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/template-master/js/chart.js"></script>
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

<!-- TABLE -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<!-- ================== MODAL ============================== -->
<script>
//------------------------ DETAIL PEGAWAI ------------------------//
$(document).on("click", "a.triggerDetail", function(){
	var dataNama = $(this).parent().parent().find('.pegawai-nama').html();
	var dataTelepon = $(this).parent().parent().find('.pegawai-telepon').html();
	var dataKota = $(this).parent().parent().find('.pegawai-kota').html();
	var dataPosisi = $(this).parent().parent().find('.pegawai-posisi').html();
	var dataKelamin = $(this).parent().parent().find('.pegawai-kelamin').html();

	$(".modal").find('#detail-nama').html(dataNama);
	$(".modal").find('#detail-telepon').html(dataTelepon);
	$(".modal").find('#detail-kota').html(dataKota);
	$(".modal").find('#detail-posisi').html(dataPosisi);
	$(".modal").find('#detail-kelamin').html(dataKelamin);
});
//---------------------------------------------------------------//

</script>

<script>
//----------------------------- UPDATE PEGAWAI ----------------------//
$(document).on("click", "a.triggerUpdate", function(){
	var dataID = $(this).attr('data-id');
	var dataNama = $(this).parent().parent().find('.pegawai-nama').html();
	var dataTelepon = $(this).parent().parent().find('.pegawai-telepon').html();
	var dataKota = $(this).parent().parent().find('.pegawai-kota').html();
	var dataPosisi = $(this).parent().parent().find('.pegawai-posisi').html();
	var dataKelamin = $(this).parent().parent().find('.pegawai-kelamin').html();

	$("#updateData").find('#update-id').attr('value', dataID);
	$("#updateData").find('#update-nama').attr('value', dataNama);
	$("#updateData").find('#update-telepon').attr('value', dataTelepon);
	$("#updateData").find("#update-kota").find('[data-kota=' +dataKota +']').prop('selected', true);
	$("#updateData").find("#update-posisi").find('[data-posisi=' +dataPosisi +']').prop('selected', true);
	$("#updateData").find('#update-kelamin').find('[data-kelamin="' +dataKelamin +'"]').prop('checked', true);

	$("#updateData").find('#update-posisi-nama').attr('value', dataPosisi);

	$("#updateData").find('#update-kota-nama').attr('value', dataKota);
});
//---------------------------------------------------------------------//

</script>

<script type="text/javascript">
	// $(document).ready(function () {

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

	<!-- AJAX -->
	<script type="text/javascript">

		var table;
		function tampil(){
			$.get("<?php echo base_url($this->router->fetch_class(). '/list_data'); ?>", function(msg){
				$('#list-data').html(msg);
				setTimeout(function(){
					table = $('#dt1').DataTable();
				}, 2000);
			});
		}

		$(document).ready(function() {
			tampil();
		});

// --------------------AJAX-------------------------//
$(document).on("submit", "#form-tambah", function(e){
	e.preventDefault();
	var form = $(this);
	$.post(form.attr("action"), form.serialize(), function() {
		table.clear();
		table.destroy();
		tampil();
		$("#insertData").modal("hide");
		form[0].reset();
	});
});

$(document).on("submit", "#form-update", function(e){
	e.preventDefault();
	var form = $(this);
	$.post(form.attr('action'), form.serialize(), function(data) {
		table.clear();
		table.destroy();
		
		tampil();
		$("#updateData").modal("hide");
	});
});

$(document).on("click", ".hapus", function(event) {
	event.preventDefault();
	var con = confirm("Yakin hapus data?");
	if(con){
		var id_posisi = $(this).attr("data-id");//serialize = ambil semua yang ada di form
		$.get("<?php echo base_url($this->router->fetch_class(). '/hapus'); ?>/"+id_posisi, function(){
			table.clear();
			table.destroy();
			tampil();
		});
	}
});
// --------------------------------------------------------//

// -------------------------- CHART ---------------------------------//



</script>
