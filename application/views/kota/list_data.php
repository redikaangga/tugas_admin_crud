
<?php foreach ($data_kota as $key => $value){ ?>
  <tr>
    <td class="pegawai-kota col-md-6 center"><?=$value->kota?></td>
    <td class="col-md-6 center">
      <a data-toggle="modal" data-target="#detailData" data-id="<?=$value->id_kota?>" class="btn btn-sm btn-success triggerDetail">
        <span class="glyphicon glyphicon-search"></span> Detail
      </a>
      <a data-toggle="modal" data-target="#updateData" data-id="<?=$value->id_kota?>" class="btn btn-sm btn-warning triggerUpdate">
        <span class="glyphicon glyphicon-pencil"></span> Update       
      </a>
      <a data-id="<?=$value->id_kota?>" class="btn btn-sm btn-danger hapus">
      <span class="glyphicon glyphicon-trash"></span> 
      </a> 
    </td>
  </tr>
<?php } ?>