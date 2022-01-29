<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Tabel Universitas</title>
</head>
<style type="text/css">
  </style>
  <body style="background:#99C68E;">
 
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
 
	<h3 class="modal-title" style="color:white;">EDIT DATA UNIVERSITAS</h3>

	</div>
      <div class="modal-body"><br/>
	<br/>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from universitas where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama Universitas</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama_universitas" value="<?php echo $d['nama_universitas']; ?>">
					</td>
				</tr>
				<tr>
					<td>Jumlah Mahasiswa</td>
					<td><input type="number" name="jumlah_mahasiswa" value="<?php echo $d['jumlah_mahasiswa']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
			<br><br>
				<tr>
				<a href="index.php">Kembali</a>
				</tr>
		</form>
		<?php 
	}
	?>
 
</body>
</html>