<center>
<?php
	$id = (isset($_GET['id'])) ? $_GET['id'] : '' ;
	if (!empty($id)) {		
		$SQL = "DELETE FROM simpanan_anggota WHERE id=$id";
		if (mysqli_query($MySQli,$SQL)) {
			echo "berhasil hapus data anggota koperasi unilak";
			echo "<br>";
			echo "<a href='?page=list'>OK</a>";
		} else {
			echo "Gagal hapus data anggota koperasi unilak !!";
		}
		
	}else{
		header("location:?page=list");
	}
 ?>
 </center>