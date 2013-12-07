<br>
<table width="700" border="0" align="center">
  <tr>
    <td>No</td>
    <td>Nama Tempat</td>
    <td>Aksi </td>
    <td>Status</td>
  </tr>
  <?php $i=1;?>
  <?php foreach($keterangan->result() as $row):?>
  <tr>
    <td><?php echo $i;?></td>
    <td><?php echo "<b>$row->nama_tempat</b><br/><p>".word_limiter($row->isi,10)."</p>"; ?></td>
   <td><?php echo anchor('dashboard/edit/'.$row->id,'edit')."|".anchor('dashboard/delete/'.$row->id,'delete',array ('onClick' => "return confirm('apakah anda yakin ')"));?></td>
    <td><?php if($row->status==1){echo "Aktif";}else{echo "Nonaktif";}?></td>
  </tr>
  <?php $i++;?>
  <?php endforeach;?>
</table>
<?php echo anchor('dashboard/addtempat','Tambah Tempat Destinasi');?>
