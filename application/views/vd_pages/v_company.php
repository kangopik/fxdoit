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
	
	<div class="container-fluid-content" style="padding: 300px 50px; margin-top: -185px;">
		<h1 class="page-header blue left">Informasi Perusahaan</h1>		
		<h2 class="sub-seo-headline">Tentang Kami</h2>
		<p class="subheading">
			Forexware terdaftar di Australian Securities and Investment Commission (ASIC) (No. Pendaftaran AFSL305539). <br /><br />
			Forexware adalah penyedia layanan perdagangan keuangan terdepan di dunia. Forexware berkomitmen untuk menyediakan layanan 
			kliring dan eksekusi paling komprehensif untuk para profesional, institusi, memiliki perlindungan dana di 5 benua dan lebih 
			dari 130 negara, dan menyediakan solusi investasi finansial terbaik untuk pelanggan. Saat membuka akun dengan Forexware, Anda 
			tidak hanya berdagang, tetapi berdagang dengan koneksi yang lebih cepat, layanan superior dengan harga yang kompetitif.
		</p>
		<h2 class="sub-seo-headline">Tanggung Jawab Kami</h2>
		<p class="subheading">
			Misi Forexwares adalah menyediakan layanan perdagangan institusional untuk semua pelanggan, baik itu klien institusi atau 
			investor individual, untuk memberi mereka teknologi eksklusif yang inovatif, perdagangan dengan biaya rendah, pengawasan dana 
			yang aman, alat riset pasar yang komprehensif, kursus pendidikan lanjutan dan pelayanan pelanggan kelas satu.<br /><br />
			Melalui kerja sama likuidasi dengan bank terkenal di dunia, Forexware menyediakan solusi tercepat dan termurah untuk pertukaran 
			mata uang dan logam mulia di seluruh dunia.
		</p>
		<h2 class="sub-seo-headline">Kapasitas dan Prospek</h2>
		<p class="subheading">
			Melalui upaya bertahun-tahun, kontrak Forexware telah dibuka untuk investor institusional dan individual lebih dari $ 100 miliar. 
			Dengan terus memberikan layanan terbaik kepada pelanggan, skala perusahaan dan bisnis kami akan terus berkembang. Pangsa pasar 
			perusahaan kami telah mendapat dorongan signifikan dan berada di antara jajaran pialang valuta asing yang penting.<br /><br />
			Dengan kualifikasi yang luar biasa, Forexware akan menyediakan layanan perantara dan bisnis transaksi multi bahasa untuk pelanggan
			global di lebih dari 100 negara (termasuk lembaga keuangan, perusahaan industri, perusahaan manajemen aset, trader profesional dan investor swasta).
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
