<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
        h2 {
        background-color:red;
        color:white;
		text-align:center;
		padding: 1em;
        }
		footer {
        background-color:red;
        color:white;
		text-align:center;
        }
		h3 {
        background-color:red;
        color:white;
		text-align:center;
        }
		body{
background: url('sun.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
    </style>
</head>
<body>
	<h2>HALAMAN UTAMA</h2>
	<nav>
				<ul>
					<li><b>MENU</b></li>
					<li><a href="index.php">Beranda</a></li>
					<li><a href="tambah.php">Tambah Data</a></li>
					<li><a href="../login/logout.php">Logout</a></li>
				</ul>
			</nav>
	<h3>Data Siswa</h3>
	
	<table cellpadding="5" cellspacing="0" border="1" align="center">
      <tr bgcolor="#FF0000">
        <th>No.</th>
        <th>NIS</th>
        <th>Nama Lengkap</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Opsi</th>
      </tr>
      <?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		//query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
		$query = mysql_query("SELECT * FROM siswa ORDER BY siswa_nis DESC") or die(mysql_error());
		
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
				//menampilkan row dengan data di database
				echo '<tr>';
					echo '<td>'.$no.'</td>';	//menampilkan nomor urut
					echo '<td>'.$data['siswa_nis'].'</td>';	//menampilkan data nis dari database
					echo '<td>'.$data['siswa_nama'].'</td>';	//menampilkan data nama lengkap dari database
					echo '<td>'.$data['siswa_kelas'].'</td>';	//menampilkan data kelas dari database
					echo '<td>'.$data['siswa_jurusan'].'</td>';	//menampilkan data jurusan dari database
					echo '<td><a href="edit.php?id='.$data['siswa_id'].'">Edit</a> / <a href="hapus.php?id='.$data['siswa_id'].'" onclick="return confirm(\'Apakah Anda Yakin Akan Menghapus Data Ini?\')">Hapus</a></td>';	//menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=siswa_id
				echo '</tr>';
				
				$no++;	//menambah jumlah nomor urut setiap row
				
			}
			
		}
		?>
    </table>
	<footer>Yuda Pradana Bagaswara - 14.111.107</footer>
</body>
</html>