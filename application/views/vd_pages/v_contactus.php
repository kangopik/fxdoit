<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('vd_pages/v_head') ?>
</head>
<body>
	<!--[if lt IE 7]>
    	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <?php 
		$view_data['page'] =  $page ;
		$this->load->view('vd_pages/v_header',$view_data) 
	?>
	
	<div class="container-fluid-content" style="padding: 200px 50px; margin-top: -85px;">
		<h1 class="page-header blue left">Contact Us</h1>	
		<h2 class="sub-seo-headline">Phone Support</h2>
		<p class="subheading">
			(+62) 82-143-136-044
		</p>
		<h2 class="sub-seo-headline">Email Support:</h2>
		<p class="subheading">
			admin@centralfxasia.com<br />
			Inquire about opening a new account, deposits, payments means, technical questions and issues<br /><br />
			ib@centralfxasia.com<br />
			Introducing Broker Service<br /><br />
			backoffice@centralfxasia.com<br />
			Welcome e-mail, or information for a preferred plan<br /><br />
			market@forexware.com<br />
			Marketing, Human Resource Management, advertising ...<br />
		</p>
		<h2 class="sub-seo-headline">Headquarters:</h2>
		<p class="subheading">
			Forexware Markets PTY Limited Level 2, 19-21 Hunter Street Sydney, New South Wales
		</p>
	</div>

	<?php $this->load->view('vd_pages/v_footer') ?>
	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/jquery.bootstrap-autohidingnavbar.js"></script>	
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/jquery.bootstrap-dropdown-hover.js"></script>
	<script>
		$('.navbar [data-toggle="dropdown"]').bootstrapDropdownHover();
    	$("div.navbar-fixed-top").autoHidingNavbar();
    </script>
</body>
</html>
