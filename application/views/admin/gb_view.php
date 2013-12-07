<?php 
$flashmessage=$this->session->flashdata('message');
echo ! empty($flashmessage) ? '<p class="message">' . $flashmessage . '</p>': '';
?>
<table border="1">
	<tr>
    	<th>Nomor</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Pesan</th>
        <th>Aksi</th>
    </tr>
    <?php
	$c=0;
	
	foreach($data_guest->result() as $row){
		?>
        <tr>
        	<td><?php echo $c=$c+1; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo mailto($row->email,$row->email);?></td>
			<td><?php echo $row->pesan; ?></td>
            <td><?php echo anchor('guestbook/hapus/'.$row->id_gb,'Hapus',array('class'=> 'delete','onclick'=>"return confirm('Anda yakin?')")); ?> </td>
        </tr>
        <?php	
	}
	?>
</table>