<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta id="viewport" name="viewport" content="width=device-width, initial-scale=.3, maximum-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="format-detection" content="telephone=no">
	<title><?php echo $title ?></title>
		
	<!-- css -->
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/dist/css/login_style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- css -->
	
	<!-- js -->
	<script>
		/** mobile detect **/
	    var isiPad = navigator.userAgent.match(/iPad/i) != null;
	   	if (isiPad) {
	       	document.getElementById("viewport").setAttribute("content", "width=device-width, initial-scale=.7, maximum-scale=.7, user-scalable=yes");
	    } else {
	       	document.getElementById("viewport").setAttribute("content", "width=device-width, initial-scale=.3, maximum-scale=1");
	    }
	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- js -->
</head>
<body>
	<div id="wrapper">
		<div id="wrapper_inner">
			<div class="container">
				<div id="logo">
					<img src="<?php echo base_url()?>assets/img/forexware-logo.png" alt="Forexware Logo" title="Forexware Logo">
				</div>
				<div id="headings_area">
					<div class="page-header section-header">	
						<h1>REGISTRASI MEMBER</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<form action="" method="post">
							<div class="col-md-6">
								<div class="form-group">
									<label class="control-label col-lg-4 label-registrasi">Nama Agen</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="AgenName" id="AgenName" value='' required="required">
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">ID</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="IdMember" id="IdMember" value='' required="required" style="max-width: 50%;">
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">Nama Lengkap</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="NamaLengkap" id="NamaLengkap" value='' required="required">
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">Email</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="Email" id="Email" value='' required="required">
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">No. Tlp</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="NoTlp" id="NoTlp" value='' required="required" style="max-width: 50%;">
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">Kota</label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="Kota" id="Kota" value='' required="required">
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">Provinsi</label>
									<div class="col-lg-8">
										<select name="Provinsi" id="Provinsi" class="form-control" required="required"> 
			                        		<option value = ''>- Select Provinsi -</option>
			                            </select>
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">Negara</label>
									<div class="col-lg-8">
										<select name="Negara" id="Negara" class="form-control" required="required"> 
			                        		<option value = ''>- Select Negara -</option>
			                            </select>
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">Jenis Akun</label>
									<div class="col-lg-8">
										<select name="Negara" id="Negara" class="form-control" required="required" style="max-width: 50%;"> 
			                        		<option value = ''>- Select Jenis Akun -</option>
			                        		<option value = 'Akun Standar'>Akun Standar</option>
			                        		<option value = 'Akun Premium'>Akun Premium</option>
			                            </select>
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="control-label col-lg-4 label-registrasi">Leverage</label>
									<div class="col-lg-8">
										<select name="Leverage" id="Leverage" class="form-control" required="required" style="max-width: 50%;"> 
			                        		<option value = ''>- Select Leverage -</option>
			                        		<option value = '1:100'>1:100</option>
			                        		<option value = '1:200'>1:200</option>
			                        		<option value = '1:300'>1:300</option>
			                        		<option value = '1:400'>1:400</option>
			                        		<option value = '1:500'>1:500</option>
			                            </select>
									</div>
								</div>
								<div class="form-group" style="padding-top: 30px;">
									<label class="checkbox-inline" style="padding-left: 35px;">
                                    	<input required="required" type="checkbox"> I accept and read the <a href="#">Terms and Conditions</a>, <a href="#">Privacy Policy</a>, Risk Acknowledgment and the Disclaimer.
                                    </label>
								</div>
								<div class="form-group" style="padding-left: 15px;">
									<input type="submit" value="Registrasi Sekarang" class="btn btn-success" name="btnregistrasi" >
								</div>
                                <hr />
                                ALREADY REGISTERED ? <a href="<?php echo base_url() ?>cd_member/C_login" >login here </a> 
							</div>
							<div class="col-md-6">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<p class="copyright">&copy; 2017 fxdoit</p>
		</div>
	</div>
</body>
</html>