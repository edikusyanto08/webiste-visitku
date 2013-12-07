<?php echo form_open('web/simpangb'); ?>
<div class="container">
<h2>Buku Tamu</h2>
<hr>
<br>
<div class="row">
	<div class="col col-md-12">
        <div class="form-group">
		<label>Nama </label>
        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Anda"/>
        </div>
		<div class="form-group">
		<label>Email </label>
		<input type="text" class="form-control" name="email" placeholder="Masukan Email" />
		</div>
        <div class="form-group">
		<label>Komentar</label>	
        <textarea class="form-control" name="pesan" placeholder="Masukan Komentar" rows="5" ></textarea>
        </div>
		<div class="form-group">
        <button type="submit" value="post" class="btn btn-success btn-lg block">
		Send</button>                                 
		</div>
	</div>
</div>
</div>
<?php echo form_close(); ?>                