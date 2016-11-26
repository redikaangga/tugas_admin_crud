<div class="navbar-nav navbar-inverse navbar-fixed-top">
  <div class="container">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="<?php echo base_url(); ?>welcome/index"><img src="<?php echo base_url(); ?>assets/template-master/images/logo30.png" alt="" style="margin-top: -8px;"> BLOCKS Dashboard</a>
 </div> 
 <div class="navbar-collapse collapse">
  <ul class="nav navbar-nav">
   <li <?php if ($page=='Index') {echo "class='active'";} ?>><a href="<?php echo base_url(); ?>welcome/index"><i class="icon-home icon-white"></i> Home</a></li>                            
   <li <?php if ($page=='pegawai') {echo "class='active'";} ?>><a href="<?php echo base_url(); ?>welcome/tables"><i class="icon-th icon-white"></i> Pegawai</a></li>

   <li <?php if ($page=='posisi') {echo "class='active'";} ?>><a href="<?php echo base_url(); ?>posisi/tables"><i class="icon-th icon-white"></i> Posisi</a></li>

   <li <?php if ($page=='kota') {echo "class='active'";} ?>><a href="<?php echo base_url(); ?>kota/tables"><i class="icon-th icon-white"></i> Kota</a></li>

 </ul>
</div><!--/.nav-collapse -->
</div>
</div>