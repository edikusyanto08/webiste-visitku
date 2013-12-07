<!DOCTYPE html>
<html>
  <head>
    <title>Visit Kuningan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url(); ?>/assets/css/mystyle.css" rel="stylesheet" media="screen">
  
  <!--for gallery-->
  <?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
</style>
  
  
  <!--end-->
  
  </head>
  <body id="home">
 	<div class="container">
    <!--row : Header-->
    	<div class="row">
  			<div class="col-lg-12">      
        		<center><img src="<?php echo base_url(); ?>assets/img/logo-sedang.png" class="img-responsive"><center>
            </div>
    	</div>
    <!--row : navigation-->
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                    	<span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                </div>
                <div class="collapse navbar-collapse" id="collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url().'index' ?>"">Beranda</a></li>
                        <li><a href="<?php echo base_url().'web/tentang' ?>">Tentang</a></li>
                        <li><a href="#">Wisata</a></li>
                        <li><a href="#">Restoran</a></li>
                        <li><a href="#">Penginapan</a></li>
                        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
						<li><a tabindex="-1" href="<?php echo base_url().'web/gallery_foto' ?>">Gallery Foto</a></li>
                        <li class="divider">
                        <li><a tabindex="-1" href="<?php echo base_url().'web/gallery_video' ?>">Gallery Video</a></li>
						</ul>
						</li>
						<li><a href="<?php echo base_url().'web/seni_budaya' ?>">Seni Budaya</a></li>
                        <li><a href="<?php echo base_url().'web/peta' ?>">Peta</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--row content-->
        <div class="container">
        	<div class="row">
            
            <!--content-->
           	 <div class="col-lg-8">
                <div class="well">
				<!-- Post -->
				
				<!--gallery-foto-->
<h2>Gallery Foto</h2>
<br>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
				
				<!--end gallery-->
				
                <!-- End Post -->
				</div>
            </div>
            <!--end of content-->

			
            <!--sidebar-->
            <div class="col-lg-4">
	            <div class="well">
    	        <p><h3>Search</h3></p>
        		    <div class="input-group">
            				<input type="text" class="form-control">
            				<span class="input-group-btn">
            					<button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
            				</span>
            		</div>   
            	</div>
            	<div class="well">
                <h3>Kategori</h3>
                <?php $kategori=$this->mkategori->getkategori(); ?>
				<ul>
				<?php foreach($kategori->result() as $kat) {?>
				<li><?php echo anchor('post/category/'.$kat->id,$kat->nama_kategori);?></li>
				<?php }?>
				
				</ul>
				
				
				</div>
				
                <div class="well">
                <h3>Peta Lokasi</h3>
                </div>

                
            </div>
           
            </div>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/myscript.js"></script>
  </body>
</html>