<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
		@font-face {
			src: url(../assets/font/tayo.ttf);
			font-family: tayo;
		}
		@font-face {
			src: url(../assets/font/hiya.ttf);
			font-family: hiya;
		}
		#ig{
				/* background-image: url("../../assets/img/instagram.png"); */
			margin-left: 20px;
			height: 200px;
			width: 200px;
			text-align: center;
			background-size: cover;
			padding-top: 70px;
			color: #F0F4F3;
		}



		#gambar img{
			position: absolute;
			width: 200px;
			margin-left: -80px;
			margin-top: -10px;

		}

		#wa{
			margin-left: -20px;
			height: 200px;
			width: 200px;
			text-align: center;
			background-image: url("../../assets/img/ig.jpg");
			background-size: cover;
			padding-top: 70px;
			color: #F0F4F3;


		}

		#twitt{
			width: 200px;
			height: 200px;
			text-align: center;
			background-size: cover;
			padding-top: 70px;
			color: #F0F4F3;

		}

		#kontak{
			margin-top: -25px;
			height: 389px;
			margin-left: 25px;
			margin-right: 27px;
		}

		.judul{
			margin-left: 20px;
			margin-bottom: 20px;
			color: #1C3341;
		}

		.judul2{
			margin-left: 40px;
			margin-bottom: 20px;
			color: #1C3341;
		}

		.judul3{
			color: #1C3341;
		}

		#tingkat{
			padding-right: 25px;
		}

		#atas{
			color: white;
			margin-top: -20px;
			margin-bottom: 30px;
		}
		h2, h3{
			font-family: hiya;
		}

		h4{
			font-family: tayo;
			font-size: 30px;
		}
		</style>
	</head>
	<body>
		<div id="atas">
			<h2 >Selamat Datang <?=$this->session->userdata('nama_user')?></h2>
				<h4 class="panel-subtitle" >Kuliner.in aja!</h4>
		</div>


									<!-- <div class="col-md-4"> -->
										<div class="panel panel-headline">
											<div class="panel-heading judul3">
												<h3 class="panel-title">Data Toko</h3>

											</div>
											<div class="panel-body">
												<div class="row">
													<div class="col-md-3">
								<?php if($this->session->userdata('level')=='admin'){?>
									<a href="<?=base_url('index.php/Kasir')?>" style="color: black">
									<?php }?>
										<div class="metric" style="width:300px; margin-left:10px;">
											<span class="icon"style="background-color:black;"><i class="fa fa-eye"></i></span>
											<p>
												<span class="number"><?= $user?></span>
												<span class="title">Pegawai</span>
											</p>
										</div>
									<?php if($this->session->userdata('level')=='admin'){?>
									</a>
									<?php }?>
								</div>

									<div class="col-md-4">

									<a href="<?=base_url('index.php/Histori')?>" style="color: black">
										<div class="metric" style="margin-left:90px; width:300px;">
											<span class="icon"style="background-color:black;"><i class="fa fa-shopping-bag"></i></span>
											<p>
												<span class="number"><?= $transaksi ?></span>
												<span class="title">Penjualan</span>
											</p>
										</div>

										</a>
									</div>
									<div class="col-md-4">
									<a href="<?=base_url('index.php/Makanan')?>" style="color: black">
										<div class="metric" style="width:300px; margin-left:90px;">
											<span class="icon"style="background-color:black;"><i class="fa fa-bar-chart"></i></span>
											<p>
												<span class="number"><?= $makanan ?></span>
												<span class="title">Makanan</span>
											</p>
										</div>
										</a>
									</div>
								</div>
							</div>
              </div><!-- /col-md-4 -->
							<div class="panel" id="tingkat">
							<div class="row">
								<div class="judul2">
									<h3>Diagram Penjualan</h3>
								</div>
								<div class="col-md-9">
									<div id="headline-chart" class="ct-chart"></div>
								</div>
								<div class="col-md-3">
									<div class="weekly-summary text-right">
										<span class="number">115</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
										<span class="info-label">Total Sales</span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">Rp.2.790.000</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
										<span class="info-label"></span>
									</div>
									<div class="weekly-summary text-right">
										<span class="number">Rp.1.190.000</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
										<span class="info-label"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

						<div class="panel" id="kontak">
							<div class="judul">
								<h3>Contact Us</h3>
							</div>
							<div class="col-md-4 mb">
								<!-- INSTAGRAM PANEL -->
								<div class="instagram-panel pn" id="ig">
										<!-- <i class="fa fa-instagram fa-4x"></i>

										<p><i class="fa fa-comment"></i>  <i class="fa fa-heart"></i> </p> -->
										<div id="gambar" style="margin-left:80px; margin-top:15px;">
											<img src="<?= base_url()?>assets/img/instagram.png" alt="">
										</div>
								</div>

							</div><!-- /col-md-4 -->

							<div class="col-md-4 col-sm-4 mb">
								<!-- REVENUE PANEL -->
								<div class="darkblue-panel pn" id="wa">
									<div class="darkblue-header">
										<h5></h5>
									</div>
									<div class="chart mt">
										<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
									</div>
										<!-- <p><i class="fa fa-comments-o"></i></p> -->
									<p class="mt"><b></b></p>
									<div id="gambar" style="margin-left: 90px;" >
										<img src="<?= base_url()?>assets/img/wat.png" alt="">
									</div>

								</div>
							</div><!-- /col-md-4 -->
							<div class="col-md-4 col-sm-4 mb">
								<!-- REVENUE PANEL -->
								<div class="darkblue-panel pn" id="twitt">
									<div class="darkblue-header">
										<h5></h5>
									</div>
									<div class="chart mt">
										<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
									</div>
									<p class="mt"><b></b></p>
									<div id="gambar">
										<img src="<?= base_url()?>assets/img/fb.png" >
									</div>
								</div>

  					</div>
						</div>

				<!-- </div> -->


	</body>
</html>
