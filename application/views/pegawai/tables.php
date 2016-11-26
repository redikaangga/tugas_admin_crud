<!-- DATA TABLE CSS -->
<link href="<?php echo base_url(); ?>assets/template-master/css/table.css" rel="stylesheet">
<!-- TABLES -->
<div class="container" style="min-height: 520px">
  <a data-toggle="modal" data-target="#insertData" class="col-md-12 btn btn-sm btn-info triggerInsert">
    <span class="glyphicon glyphicon-user"></span> Add       
  </a>

  <br>
  <br>

  <!-- CONTENT -->
  <div class="row">
    <div class="col-sm-12 col-lg-12">
      <table class="display" id="dt1">
        <thead>
          <tr>
            <th style="font-size: inherit">Nama</th>
            <th style="font-size: inherit">Telepon</th>
            <th style="font-size: inherit">Kota</th>
            <th style="font-size: inherit">Posisi</th>
            <th style="font-size: inherit">Kelamin</th>
            <th style="font-size: inherit; width: 220px;" >Aksi</th>
          </tr>
        </thead>
        <tbody id="list-data">

        </tbody>
      </table><!--/END SECOND TABLE -->

      <!-- MODAL DETAIL -->
      <div class="modal fade" id="detailData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Detail Data</h4>
            </div>
            <div class="modal-body">
              <table class="table border">
                <tbody>
                  <tr>
                    <td>
                      Nama
                    </td>
                    <td id="detail-nama">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Telepon
                    </td>
                    <td id="detail-telepon">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Kota
                    </td>
                    <td id="detail-kota">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Posisi
                    </td>
                    <td id="detail-posisi">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Kelamin
                    </td>
                    <td id="detail-kelamin">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div> 
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div> 

      <!-- MODAL UPDATE -->
      <div class="modal fade" id="updateData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Update Data</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?=site_url('welcome/act_edit');?>" id="form-update">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="id" class="form-control" value="" id="update-id">

                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="" id="update-nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" placeholder="Telepon" value="" id="update-telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kota</label>
                  <div class="col-sm-10">

                    <select name="kota" class="form-control" id="update-kota">
                      <option>-- Pilih Kota --</option>
                      <?php foreach ($data_kota as $key => $value) { ?>
                      <option value="<?=$value->id_kota?>" data-kota="<?=$value->kota?>">
                        <?=$value->kota?>  
                      </option>           
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Posisi</label>
                  <div class="col-sm-10">

                    <select name="posisi" class="form-control" id="update-posisi">
                      <option>-- Pilih Posisi --</option>
                      <?php foreach ($data_posisi as $key => $value) { ?>
                      <option value="<?=$value->id?>" data-posisi="<?=$value->posisi?>">
                        <?=$value->posisi?> 
                      </option>           
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelamin</label>
                  <div class="col-sm-10" id="update-kelamin">
                    <label class="radio-inline">
                      <input type="radio" data-kelamin="Laki - Laki" name="kelamin" value="1"> Laki-laki
                    </label>
                    <label class="radio-inline">
                      <input type="radio" data-kelamin="Perempuan" name="kelamin" value="2"> Perempuan
                    </label>
                  </div>
                </div>    
                <div class="form-group">
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> 

      <!-- MODAL INSERT -->
      <div class="modal fade" id="insertData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Insert Data</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?=site_url('welcome/act_tambah');?>" id="form-tambah">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" name="telepon" class="form-control" id="inputEmail3" placeholder="Telepon">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kota</label>
                  <div class="col-sm-10">

                    <select name="kota" class="form-control">
                      <option>-- Pilih Kota --</option>
                      <?php foreach ($data_kota as $value) { ?>
                      <option value="<?=$value->id_kota?>" >
                        <?=$value->kota?>  
                      </option>
                      <?php } ?>
                    </select>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Posisi</label>
                  <div class="col-sm-10">

                    <select name="id_posisi" class="form-control">
                      <option>-- Pilih Posisi --</option>
                      <?php foreach ($data_posisi as $value) { ?>
                      <option value="<?=$value->id?>" >
                        <?=$value->posisi?> 
                      </option>
                      <?php } ?>
                    </select>

                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Kelamin</label>
                  <div class="col-sm-10">
                    <label class="radio-inline">
                      <input type="radio" id="laki" name="kelamin" value="1"> Laki-laki
                    </label>
                    <label class="radio-inline">
                      <input type="radio" id="perempuan" name="kelamin" value="2"> Perempuan
                    </label>
                  </div>
                </div>

                <div class="form-group">
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div> 

    </div><!--/span12 -->
  </div><!-- /row -->
</div> <!-- /container