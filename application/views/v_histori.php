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
			td, th{
				color: #1C3341;
				font-family: tayo;
				font-size: 20px;
			}
			th{
				font-size: 23px;
			}

			h1{
				color: white;
				margin-top: 5px;
				margin-bottom: 35px;
				font-family: hiya;
				font-size: 45px;
				text-align: center;
			}

		</style>
	</head>
	<body>

		<h1>Histori   Penjualan</h1>



		<table class="table table-hover table-stripped">

		<thead>

			<tr>

				<th>No</th><th>No Nota</th><th>nama kasir</th><th>Pembeli</th><th>total</th><th>tanggal beli</th><th></th><th></th>

			</tr>

		</thead>

		<tbody>


		<?php $no = 0; foreach($ts as $ts): $no++;?>


			<tr>

				<td><?=$no?></td><td><?=$ts->kode_transaksi?></td><td><?=$ts->nama_user?></td><td><?=$ts->nama_pembeli?></td><td><?=$ts->total?></td><td><?=$ts->tanggal_beli?></td>

			</tr>



		<?php endforeach?>


		</tbody>

		</table>
		<a href="<?=base_url('index.php/Histori/cetak_laporan')?>" class="btn btn-primary" style="float: right;">Print</a>
	</body>
</html>
