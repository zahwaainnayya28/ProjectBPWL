
<html>

<head>
	<title>APOTEK</title>
</head>
<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
<link rel="icon" href="../views/image/image2.jpg" type="image/jpg">
<body>
	<div class="container col-md-6 mt-4">
		<h1>Table Obat</h1>
		<div class="card">
			<div class="card-header bg-success text-white ">
				Edit Obat
			</div>
			<div class="card-body">

<form action = "<?php echo base_url('Welcome/aksiedit')?>" method="post">

					<div class="form-group">
						<label>Nama Obat</label>
						<input type="text" name="nama_obat" required="" class="form-control" 
						value="<?php echo $dataobat->nama_obat ?>">

						<!-- ini digunakan untuk menampung id yang ingin diubah -->
						<input type="hidden" name="kode_obat" required="" value="<?php echo $dataobat->kode_obat ?>">
					</div>
					<div class="form-group">
						<label>Harga Obat</label>
						<input type="number" name="harga_obat" class="form-control" value="<?php echo $dataobat->harga_obat ?>">
					</div>

					<div class="form-group">
						<label>Jenis Obat</label>
						<input type="text" name="jenis_obat" class="form-control" value="<?php echo $dataobat->jenis_obat ?>">
					</div>

                    <div class="form-group">
						<label>Dosis Obat</label>
						<input type="text" name="dosis_obat" class="form-control" value="<?php echo $dataobat->dosis_obat ?>">
					</div>
					<div class="form-group">
						<label>Jumlah Obat</label>
						<input type="number" name="jumlah_obat" class="form-control" value="<?php echo $dataobat->jumlah_obat ?>">
					</div>
					<a href="tampil.php" class="btn btn-warning float-right">Kembali</a>
					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Update data</button>
				</form>
    
    <?php
 ?>

</div>
		</div>
	</div>


	<script type="text/javascript" src="../../assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
</body>

</html>