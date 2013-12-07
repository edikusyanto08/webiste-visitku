<div class="content">
<?php foreach($keterangan->result() as $row):?>
	<div id="berita">
		<h2><?php echo $row->nama_tempat; ?></h2>
		<hr>
			<p><?php echo $row->isi;?></p> <!--membatasi karakter-->
			<br>
			<a href="<?php echo base_url().'post/selengkapnya/'.$row->id ?>" class="btn btn-success">Kembali</a>
			<hr>
	</div>
	<?php endforeach; ?>
</div>	

