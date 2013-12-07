<div class="content">
<?php foreach($keterangan->result() as $row):?>
	<div id="berita">
		<h2><?php echo $row->nama_tempat; ?></h2>
		<hr>
			<p><?php echo word_limiter($row->isi,20);?></p> 
			<br>
			<a href="<?php echo base_url().'post/selengkapnya/'.$row->id ?>" class="btn btn-success">Selengkapnya</a>
			<hr>
	</div>
	<?php endforeach; ?>
</div>	