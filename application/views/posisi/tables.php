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
            <th style="font-size: inherit">Nama Posisi</th>
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
              <h4 class="modal-title" id="myModalLabel">Detail Posisi</h4>
            </div>
            <div class="modal-body">
              <table class="table border">
                <tbody>
                  <tr>
                    <td class="col-md-3" style="font-weight: bold;">
                      Nama Posisi
                    </td>
                    <td id="detail-posisi" class="col-md-9">

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
              <h4 class="modal-title" id="myModalLabel">Update Posisi</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?=site_url('posisi/act_edit');?>" id="form-update">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Posisi</label>
                  <div class="col-sm-9">
                    <input type="hidden" name="id" class="form-control" value="" id="update-id">

                    <input type="text" name="nama" class="form-control" placeholder="Nama" value="" id="update-posisi-nama">
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
              <h4 class="modal-title" id="myModalLabel">Insert Posisi</h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="<?=site_url('posisi/act_tambah');?>" id="form-tambah">
                <div class="form-group">
                  <label class="col-sm-3 control-label">Nama Posisi</label>
                  <div class="col-sm-9">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Posisi">
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