<!DOCTYPE html>
<html>
  <head>
    <title>Visit Kuningan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- Paket Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url(); ?>/assets/css/mystyle.css" rel="stylesheet" media="screen">
	<!-- End Bootstrap -->
  
    <!-- Google Maps-->
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBuW_vMbm7-wAkwH4AG3XW3Mx2AYADUFxY&sensor=false">
	</script>


	<!-- End Google Maps-->
	</head>
	<body id="home">
 	<div class="container">

    <!--row 1 : Header-->
    	<div class="row">
  			<div class="col-lg-12">      
        		<center><img src="<?php echo base_url(); ?>assets/img/logo-sedang.png" class="img-responsive"><center>
            </div>
    	</div>
		<br>
	<!--end Header-->
	
    <!--row 1 - menu_navigation-->
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
                        <li><a href="<?php echo base_url().'index' ?>">Beranda</a></li>
                        <li><a href="<?php echo base_url().'web/tentang' ?>">Tentang</a></li>
                        <li><a href="<?php echo base_url().'post/' ?>">Wisata</a></li>
                        <li><a href="<?php echo base_url().'post/' ?>">Tempat Makan</a></li>
                        <li><a href="<?php echo base_url().'post/' ?>">Penginapan</a></li>
                        <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Gallery<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                <li><a tabindex="-1" href="<?php echo base_url().'web/gallery_foto' ?>">Gallery Foto</a></li>
                                <li class="divider"></li>
                                <li><a tabindex="-1" href="<?php echo base_url().'web/gallery_video' ?>">Gallery Video</a></li>
                            </ul>
						</li>
						<li><a href="<?php echo base_url().'web/seni_budaya' ?>">Seni Budaya</a></li>
                        <li><a href="<?php echo base_url().'web/peta' ?>">Peta</a></li>
                        <li><a href="<?php echo base_url().'web/bukutamu' ?>">Buku Tamu</a></li>						
                    </ul>
                </div>
            </nav>
        </div>
		<!--End of Navigation-->
        <!--row content-->
        <div class="container">
        	<div class="row">
            
            <!--content-->
           	 <div class="col-lg-8">
                <div class="well">
				<!-- Post -->
				<?php $this->load->view($content); ?>             				
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
                <hr>
				<?php $kategori=$this->mkategori->getkategori(); ?>
				<ul>
				<?php foreach($kategori->result() as $kat) {?>
				<li><?php echo anchor('post/category/'.$kat->id,$kat->nama_kategori);?></li>
				<?php }?>
				
				</ul>
				
				
				</div>
				
                <div class="well">
                <h3>Peta Lokasi</h3>
				<hr>
                </div>

                
            </div>
            </div>
		<!--tempat wisata-->        
        <div class="row well-footer">
        <div class="col-lg-4 col-md-4">
		  <h4><b>Share On</b></h4>
          <li><small>Facebook</small></li>
		  <li><small>Twitter</small></li>
		  <li><small>Path</small></li>		
		</div>
        
        <div class="col-lg-4 col-md-4">
          <h4><b>Contact</b></h4>
		  <li><small>facebook.com/visitku</small></li>
		  <li><small>Jl.Jendral Sudirman No.137 Kab.Kuningan 45511</small></li>
		  <li><small>iqbalphillroe@gmail.com</small></li>
		</div>
		
		<div class="col-lg-4 col-md-4">
		<h4><b>Download Aplikasi Visitku</b></h4>
		<p><small>Aplikasi ini menyediakan informasi seputar Pariwisata di Kabupaten Kuningan seperti Tempat Wisata, Tempat Makan dan Tempat Penginapan</small></p>  
            					<button class="btn btn-success btn-sm btn-block" type="button">Download Aplkasi Visit Kuningan</button>
		</div>

      </div><!-- /.row -->
	
		<footer>
        <hr>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; 2013 &middot; Jamaludin Iqbal &middot; University of Gunadarma </p>
          </div>
        </div>
      </footer>
        </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/myscript.js"></script>
  </body>
</html>