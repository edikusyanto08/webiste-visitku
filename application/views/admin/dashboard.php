<!DOCTYPE html>
<html>
  <head>
    <title>Visitku-Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" media="screen">
 	<link href="<?php echo base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">
	
	<!--Tiny MCE-->
	<script type="text/javascript" src="<? echo base_url();?>assets/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript"> 
	tinymce.init({
	  selector: "textarea",
	  plugins: [
		"advlist autolink lists link image charmap print preview anchor",
		"searchreplace visualblocks code fullscreen",
		"insertdatetime media table contextmenu paste jbimages"
	  ],
	  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages",
	  relative_urls: false
		
	});
	</script>
	<!-- End of TinyMCE -->	
  
  </head>
  
  <body id="home">	
    <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand"><a href="<?php echo base_url().'dashboard/index' ?>">Visitku-Admin</a></li>
          <li><a href="<?php echo base_url().'dashboard/index' ?>">Dashboard</a></li>
		  <li><a href="<?php echo base_url().'dashboard/addtempat' ?>">Tambah Tempat</a></li>
          <li><a href="<?php echo base_url().'dashboard/alltempat' ?>">List Tempat</a></li>          
		  <li><a href="<?php echo base_url().'dashboard/tambahfoto' ?>">Upload Foto</a></li>
          <li><a href="<?php echo base_url().'dashboard/tampilgb' ?>">Guest Book</a></li>
          <li><a href="<?php echo base_url().'dashboard/logout' ?>">Logout</a></li>
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <div class="content-header">
			<?php $this->load->view($content); ?> 
        </div> 
        
      </div>
   </div>
   </body>    
       
       
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/myscript.js"></script>
    
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
  </body>
</html>