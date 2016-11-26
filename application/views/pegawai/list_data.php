
<?php foreach ($data_pegawai as $key => $value){ ?>
  <tr>
    <td class="pegawai-nama"><?=$value->nama?></td>
    <td class="pegawai-telepon"><?=$value->telepon?></td>
    <td class="pegawai-kota"><?=$value->kota?></td>
    <td class="pegawai-posisi"><?=$value->posisi?></td>
    <td class="pegawai-kelamin"><?=$value->kelamin?></td>
    <!-- <td class="center"><?=$value->status?></td> -->
    <td>
      <a data-toggle="modal" data-target="#detailData" data-id="<?=$value->id?>" class="btn btn-sm btn-success triggerDetail">
        <span class="glyphicon glyphicon-search"></span> Detail
      </a>
      <a data-toggle="modal" data-target="#updateData" data-id="<?=$value->id?>" class="btn btn-sm btn-warning triggerUpdate">
        <span class="glyphicon glyphicon-pencil"></span> Update       
      </a>
      <a data-id="<?=$value->id?>" class="btn btn-sm btn-danger hapus">
      <span class="glyphicon glyphicon-trash"></span> 
      </a> 
    </td>
  </tr>
<?php } ?>