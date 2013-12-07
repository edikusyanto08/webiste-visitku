<!DOCTYPE html>
<html class="full" lang="en">
  <head>
    <title>Visit Kuningan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import paket bootstrap	-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
  	<link href="<?php echo base_url(); ?>assets/css/mystyle.css" rel="stylesheet">
	<!-- end bootstrap -->
  </head>

  <body id="home">
     <div class="container">
     <!--Header-->
    	<div class="row">
  			<div class="col-lg-12">      
        		<center><img src="<?php echo base_url(); ?>assets/img/logo-sedang.png" class="img-responsive"><center>
				<br>
			</div>
    	</div>
     <!--end of header-->
          
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
 		</div> <!--end of container-->
        
        <!---- container ---->
        <div class="container">
        <!-------slide------->
        <div class="row">
		<div class="col-lg-7">
        <div id="myCarousel" class="carousel slide">
				<section class="carousel-inner">
				<div class="active item"><img src="<?php echo base_url(); ?>assets/img/slide/cigugur.jpg">
                    <div class="carousel-caption">
                        <h3>Objek Wisata Cigugur</h3>
                    </div>
                </div>
                <div class="item"><img src="<?php echo base_url(); ?>assets/img/slide/linggarjati.jpg">
					<div class="carousel-caption">
						<h3>Objek Wisata Linggarjati</h3>
					</div>	
				</div>
                <div class="item"><img src="<?php echo base_url(); ?>assets/img/slide/paniis.jpg">
					<div class="carousel-caption">
						<h3>Objek Wisata Paniis</h3>
					</div>
				</div>
				<div class="item"><img src="<?php echo base_url(); ?>assets/img/slide/talagaremis.jpg">
					<div class="carousel-caption">
						<h3>Objek Wisata Talagaremis<h3>
					</div>
				</div>                
				<div class="item"><img src="<?php echo base_url(); ?>assets/img/slide/tamanpurbakala.jpg">
					<div class="carousel-caption">
						<h3>Objek Wisata Taman Purbakala</h3>
					</div>
				</div> 
				<div class="item"><img src="<?php echo base_url(); ?>assets/img/slide/telagabiru.jpg">
					<div class="carousel-caption">
						<h3>Objek Wisata Telaga Biru</h3>
					</div>
				</div> 
				<div class="item"><img src="<?php echo base_url(); ?>assets/img/slide/wadukdarma.jpg">
					<div class="carousel-caption">
						<h3>Objek Wisata Waduk Darma</h3>
					</div>
				</div> 				
		</section>             
		<a href="#myCarousel" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a><a href="#myCarousel" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
		<li data-target="#myCarousel" data-slide-to="5"></li>
		<li data-target="#myCarousel" data-slide-to="6"></li>	
		<ol>
        </div>             
        </div>
        <!--end of slide-->
        
        <!--Pencarian-->
        <div class="col-lg-5">
          <div class="well-cari">
          <form>
          <p>Nama Tempat</p>
          <input type="text" name="cari" class="col-lg-5 form-control input-sm" size="3" placeholder="Masukan Nama Tempat">
          <br>
          <br>
          <p>Kategori</p>
          <select class="form-control input-sm col-lg-5" placeholder="Pilih Kaegori">
				<option value="wis">Wisata</option>
				<option value="res">Restoran</option>
				<option value="hot">Hotel</option>
           </select>
		  <br>
          <br>
		  <br>
          <button type="submit" class="btn btn-primary btn-block">Cari Lokasi</button>
          
          <br>
          </div>	
        </div>
        </div>
       	<!--Akhir Pencarian-->
        <br>
        <div class="row ">
       	<!--tempat wisata-->
        <div class="col-lg-4 well-wisata">
          <h2>Wisata</span></h2>
          <p>Kabupaten Kuningan memiliki beragam objek wisata yang patut untuk dikunjungi dan tidak kalah menariknya dengan yang ada di kota-kota lain, ingin tau apa saja tempat wisata yang ada di Kabupaten kuningan.</p>
          <a class="btn btn-success-well" href="#">Klik Disini</a>
        </div>
        <div class="col-lg-4 well-hotel">
          <h2>Hotel</span></h2>
          <p>Anda ingin berkunjung ke Kuningan tapi bingung mencari tempat penginapan, kami menyediakan informasi mengenai penginapan untuk mempermudah anda dalam mencari tempat penginapan yang paling pas.</p>
          <a class="btn btn-success-well" href="#">Klik Disini</a>
        </div>
        <div class="col-lg-4 well-makan">
          <h2>Makanan</h2>
          <p>Jika anda berkunjung ke Kabupaten Kuningan tak lengkap rasanya jika tidak mencicipi makanan khas yang ada di Kabupaten Kuningan, disini kami menyediakan informasi seputar wisata kuliner.</p>
          <a class="btn btn-success-well" href="#">Klik Disini</a>
        </div>
        </div>
        <!--tempat wisata-->        
        <div class="row well-promo">
        <div class="col-lg-8 col-md-8">
          <h4><b>Download aplikasi Visit Kuningan</b></h4>
          <p>Jika anda pengguna Android, kami menyediakan aplikasi Pariwisata Kuningan yaitu Visit Kuningan sehingga pencarian informasi akan lebih memudahkan anda.</p>
        </div>
        
        <div class="col-lg-4 col-md-4">
        	<br>
          <a class="btn btn-lg btn-success-dl pull-right" href="http://startbootstrap.com">Download Aplikasi</a>
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
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>
  </body>
</html>