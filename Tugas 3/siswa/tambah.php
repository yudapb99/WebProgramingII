<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
h2, footer{
				padding: 1em;
				color:#FFFFFF;
				background-color:#FF0000;
				clear:left;
				text-align :center;
			}
			h3 {
				color:#FFFFFF;
				background-color:#FF0000;
				clear:left;
				text-align :center;
			}
			body{
background: url('sun.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
    </style>
</head>
<body>
	<h2>INPUT DATA</h2>
	
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="tambah.php">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	
	<h3>Tambah Data Siswa</h3>
	
	<form action="tambah-proses.php" method="post">
		<table cellpadding="3" cellspacing="0" align="center">
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" required></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" size="30" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" required>
						<option value="">Pilih Kelas</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" required>
						<option value="">Pilih Jurusan</option>
						<option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
						<option value="Multimedia">Multimedia</option>
						<option value="Akuntansi">Akuntansi</option>
						<option value="Perbankan">Perbankan</option>
						<option value="Pemasaran">Pemasaran</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<footer>Yuda Pradana Bagaswara - 14.111.107</footer>
</body>
</html>