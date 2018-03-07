<?php  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>IPCOMC - Registration </title>
		<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<link href="<?php echo base_url(''); ?>assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url(''); ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
		<style>
			.none{
				display: none;
			}
		</style>
	</head>
	<body>
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<div class="wrapper pa-0">
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Daftar akun baru</h3>
											<h6 class="text-center nonecase-font txt-grey">Enter your data here!.</h6>
										</div>	
										<div class="row sukses none">
											<div class="col-md-12">
												<div class="alert alert-success alert-dismissable">
													<i class="zmdi zmdi-check pr-15 pull-left"></i><p class="pull-left">Account successfully registered!</p> 
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
										<div class="row galat none">
											<div class="col-md-12">
												<div class="alert alert-warning alert-dismissable">
													<i class="zmdi zmdi-alert-circle-o pr-15 pull-left"></i><p class="pull-left isi-galat"></p>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
										<div class="row error none">
											<div class="col-md-12">
												<div class="alert alert-danger alert-dismissable">
													<i class="zmdi zmdi-alert-circle-o pr-15 pull-left"></i><p class="pull-left isi-error"></p>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
										<?php 
										if (isset($_GET['sandi_tidak_sinkron'])) {
										 ?>
										 <div class="alert alert-warning">
										 	<p>
										 		Password is not valid !.
										 	</p>
										 </div>
										<?php } ?>
										<div class="form-wrap">
											<form action="<?php echo base_url('index.php/c_akun/daftar_akun_baru/'); ?>" class="daftar-akun" method="post" enctype="multipart/form-data">
												<div class="form-group">
													<label for="" class="control-label">First Name</label>
													<input type="text" name="f_name" id="" class="form-control " placeholder="Nama depan" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="" class="control-label">Middle Name</label>
													<input type="text" name="m_name" id="" class="form-control " placeholder="Nama tengah" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="" class="control-label">Last Name</label>
													<input type="text" name="l_name" id="" class="form-control " placeholder="Nama belakang" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="status" class="control-label">Category</label>
													<select name="status" class="form-control">
														<option value="">--Pilih--</option>
														<option value="user">Presenter</option>
														<option value="participant">Non-Presenter</option>
													</select>
												</div>
												<div class="form-group">
													<label for="email" class="control-label">Email</label>
													<input type="email" name="email"  class="form-control " placeholder="Email" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="" class="control-label">Username</label>
													<input type="text" name="username" id="" class="form-control " placeholder="Pengguna" autocomplete="off">
												</div>
												<div class="form-group">
													<label for="" class="control-label">Password</label>
													<input type="password" name="sandi" id="" class="form-control " placeholder="Password" autocomplete="off">
												</div>

												<div class="form-group">
													<label for="" class="control-label">Confirm Password</label>
													<input type="password" name="confirm" id="" class="form-control" placeholder="Masukkan ulang kata sandi" autocomplete="off">
												</div>
												<div class="form-group text-center">
													<div class="row">
														<div class="col-md-6" align="left">
															<a href="<?php echo base_url(''); ?>" class="btn btn-primary btn-rounded">Back</a>
														</div>
														<div class="col-md-6" align="right">
															<button type="submit" class="btn btn-info btn-success btn-rounded " class="daftar-akun">Save</button>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="<?php echo base_url(''); ?>assets/vendors/bower_components/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(''); ?>assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(''); ?>assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
		<script src="<?php echo base_url(''); ?>assets/dist/js/jquery.slimscroll.js"></script>
		<script src="<?php echo base_url(''); ?>assets/dist/js/init.js"></script>
		<script src="<?php echo base_url(''); ?>assets/push.js-master/bin/push.min.js"></script>


		
	</body>
</html>