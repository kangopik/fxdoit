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
		<h1 class="page-header blue left">Karakter Unggulan</h1>	
		<h2 class="sub-seo-headline">Forexware terdaftar di Australian Securities and Investment Commission (ASIC) (No. Pendaftaran AFSL305539).</h2>
		<p class="subheading">
			Investor akun perdagangan yang dibuka di Forexware akan benar-benar dilindungi oleh ASIC. ASIC adalah regulator hukum dari layanan 
			keuangan dan pasar di Australia. Komisi Sekuritas dan Investasi Australia didirikan pada tahun 2001 berdasarkan "Securities and 
			Investments Commission Act" Australia. Badan ini secara independen menjalankan fungsi peraturan pada perusahaan, perilaku 
			investasi, produk dan layanan keuangan sesuai undang-undang.
		</p>
		<h2 class="sub-seo-headline">Penyebaran yang sangat kompetitif</h2>
		<p class="subheading">
			Dengan tempat penyelesaian di beberapa bursa, Forexware mendapatkan harga terbaik di pasar, mengutip secara langsung dan 
			menawarkan harga yang kompetitif kepada pelanggan. Perdagangan tidak akan dibatasi jika terjadi pelepasan berita dan data 
			ekonomi penting. Dan Anda dapat mengatur pesanan dalam selisih antara harga beli dan penjualan. Pada saat yang sama, kami 
			mendapat dukungan kuat dari lembaga keuangan internasional terkemuka, seperti BarclaysBank, HSBC, Goldmansachs, UBS, 
			JPMorgenchase, CreditSuisse dan sebagainya. Forexware bisa mendapatkan harga pasar yang relatif optimal dan menyebar di bawah 
			situasi likuiditas pasar valuta asing, yang menjamin kepentingan investor dalam jumlah besar.
		</p>
		<h2 class="sub-seo-headline">Pasar Likuiditas Unggulan</h2>
		<p class="subheading">
			Forexwares bulanan rata-rata volume perdagangan valuta asing hingga puluhan miliar rupiah. Seperti volume transaksi yang besar 
			membuat kami menjalin hubungan baik dengan bank kliring terkemuka di dunia, ini membuat Forexware menyediakan pelanggan global 
			dengan likuiditas terbaik dan standar eksekusi pesanan yang lebih ekstrem.
		</p>
		<h2 class="sub-seo-headline">Platform Perdagangan yang Kuat</h2>
		<p class="subheading">
			Forexware menggunakan platform perdagangan utama industri - MetaTrader4 sebagai solusi platform perdagangan, menyediakan 
			platform perdagangan multi-akun, serta platform perdagangan untuk terminal mobile cerdas untuk manajer aset. Kegunaan, 
			keterbukaan, pangsa pasar Meta Trader4 berada pada posisi terdepan di industri ini. Pelanggan dapat dengan mudah mendownload dan 
			mencoba Mata Trader4 di situs ini. Entah itu akun real, atau akun demo, pelanggan bisa merasakan investasi pasar profesional 
			terhadap valuta asing, logam mulia, minyak, pangsa global penting. Pilih Forexware, Anda dapat menghubungkan pasar investasi 
			finansial dunia hanya dengan platform perdagangan.
		</p>
		<h2 class="sub-seo-headline">STP trading patterns without artificial interference</h2>
		<p class="subheading">
			When customers open account and trading in Forexware, each of the order will be sent to co-operative bank. Customers profit and 
			loss have no conflicts of interest with Forexware.<br /><br />
			You will trade without artificial interference, whats more , the electronic trading system improves the efficiency and reduces 
			the transaction costs, so we can provide you with a lower spread.
		</p>
		<h2 class="sub-seo-headline">Top IT Technology, safe and stable system</h2>
		<p class="subheading">
			Forexware cooperated with a number of well-known data centers to establish a global financial transaction data center, 
			to provide integrated financial online trading solutions for traders of every countries and regions from different time zone.<br /><br />
			With years of experience of the technical team and lots of hardware facilities input, Forexware effectively prevent network intrusion 
			and reduce transaction network delay. Data center is also equipped with a Dos-attacks protection system. They can defense or insulate 
			any kind of attack. When theres a lot of malicious attack systems, only data center will be attacked and Meta Trader4 server continues 
			to operate under it’s normal mode. Therefore, data center increases the system stability under DOS and DDOS attacks.	
		</p>
		<h2 class="sub-seo-headline">One-on-One Customer Service Manager</h2>
		<p class="subheading">
			For customers in the Asia Pacific region, Forexware provide telephone support in Chinese and Chinese online services. 
			Each customer will have a personal account manager to serve you.
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
