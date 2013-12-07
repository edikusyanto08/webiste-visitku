<!DOCTYPE html>
<html>
  <head>
    <title>Visit Kuningan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet" media="screen">
 	<link href="<?php echo base_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">
  
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
 	
    <div id="wrapper">
      
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand"><a href="#">Admin</a></li>
          <li><?php echo anchor('/dashboard/index','Dashboard'); ?></li>
		  <li><?php echo anchor('/dashboard/addtempat','Tambah Tempat'); ?></li>
          <li><?php echo anchor('/dashboard/alltempat','List Tempat'); ?></li>          
		  <li><?php echo anchor('/dashboard/tambahfoto','Upload Gallery'); ?></li>
          <li><?php echo anchor('/dashboard/tampilgb','Buku Tamu'); ?></li>
          <li><?php echo anchor('/admin/logout/', 'Logout'); ?></li>
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <div class="content-header">

        </div> 
		<div>
		<!--gallery-foto-->
			<br>
			<div style='height:20px;'></div>  
			<div>
				<?php echo $output; ?>
			</div>
				
		<!--end gallery-->
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