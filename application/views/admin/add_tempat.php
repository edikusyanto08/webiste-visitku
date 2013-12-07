<?php echo form_open('dashboard/submit');?>
<div class="container">
<h2>DASHBOARD -> TAMBAH TEMPAT DESTINASI</h2>
    <div class="row">
        <div class="col-md-10">
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                            </span>TAMBAHKAN TEMPAT DESTINASI PARIWISATA</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
									<label>Nama Tempat</label>
                                        <input type="text" class="form-control" name="nama_tempat" placeholder="Masukan Nama Tempat"/>
                                    </div>
                                    <div class="form-group">
									<label>Keterangan</label>	
                                        <textarea class="form-control" name="isi" placeholder="Keterangan Tempat Wisata" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="col-md-6">
                                   <div class="well well-sm well-primary">								
                                    <div class="form-group">
                                        <label for="category">
                                            Kategori</label>
                                        <select class="form-control" name="kategori" id="category">
                                           		 <?php 
													$kat=$this->mkategori->getkategori();
													foreach($kat->result() as $kategori):
												 ?>
												<option value="<?php echo $kategori->id;?>" ><?php echo $kategori->nama_kategori?></option>
												<?php endforeach;?>

                                        </select>
										<label for="category">
											Status</label>
                                        <div class="form-group">
                                            <select class="form-control" name="status">
                                                <option value="1" selected="selected">Publikasikan</option>
                                                <option value="0" >Draft</option>
                                            </select>
                                        </div>

										
                                    </div>
									</div>
                                </div>							
							</div>
						<div class="col col-lg-12 centered">
                            <button type="submit" value="post" class="btn btn-success btn-lg">
							Publish</button>                                 
						</div>
                        </div>
                    </div>
                </div>
</div>
<?php echo form_close();?>