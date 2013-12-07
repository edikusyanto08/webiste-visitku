<?php foreach($keterangan->result() as $ket){
	$nama_tempat=$ket->nama_tempat;
	$isi=$ket->isi;
	$kategori_id=$ket->id_kategori;
	$status=$ket->status;
	$id=$ket->id;
	
}
?>

<?php echo form_open('dashboard/edit_submit');?>
<div class="container">
<h2>KOREKSI DATA TEMPAT WISATA</h2>
    <div class="row">
        <div class="col-md-10">
                 <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-file">
                            </span>KOREKSI DATA TEMPAT WISATA</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
									<label>Nama Tempat</label>
                                        <input type="text" class="form-control" name="nama_tempat" value='<?php echo $nama_tempat; ?>' />
                                    </div>
                                    <div class="form-group">
									<label>Keterangan</label>	
										<textarea name="isi" class="form-control" rows="7"><?php echo $isi;?></textarea>
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
													if($kategori_id==$kategori->id){
														$select="selected='selected'";
														
													}
													else {
													$select="";
													}
													?>
											<option value="<?php echo $kategori->id;?>" <?php echo $select;?>><?php echo $kategori->nama_kategori?></option>
											<?php endforeach;?>
                                        </select>
										<label for="category">
											Status</label>
                                        <div class="form-group">
                                            <select class="form-control" name="status">
                                                	     <?php if ($status==1){?>
															<option value="1" selected="selected">Aktif</option>
															<option value="0" >Nonaktif</option>
														 <?php }else{?>
															<option value="1" >Aktif</option>
															<option value="0" selected="selected">Nonaktif</option>
														 <?php }?>
                                            </select>
                                        </div>

										
                                    </div>
									</div>
                                </div>							
							</div>
						<?php echo form_hidden('id',$id);?>
						<div class="col col-lg-12 centered">
                            <button type="submit" value="post" class="btn btn-success btn-lg">
							Update</button>                                 
						</div>
                        </div>
                    </div>
                </div>
</div>
<?php echo form_close();?>