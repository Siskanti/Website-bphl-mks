<?php 

	$sql = mysqli_query($con, "SELECT * FROM tbl_sicakap");
	$data = mysqli_fetch_array($sql);

 ?>
	<div class="col-lg-10 m-auto">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form  <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
            <form method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-12">
							<input type="text" name="judul" placeholder="Masukkan Judul" class="form-control">
                            <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
						</div>
						<div class="col-lg-12">
							<textarea class="form-control" name="artikel" cols="30" rows="10"></textarea>
						</div>
						<div class="col-lg-12 mt-3">
							<button name="submit" class="btn btn-primary btn-block">Tambah</button>
						</div>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 

// include "../config/config.php";	

if(isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $date = $_POST['tanggal'];
    $artikel = $_POST['artikel'];
    $author = $_SESSION['pengguna'];
    $sql = mysqli_query($con, "UPDATE tbl_sicakap SET  judul='$judul', artikel='$artikel' WHERE id_sicakap='$id'");

    // $sql = mysqli_query($con, "INSERT INTO tbl_sicakap VALUES ('',  '$judul', '$artikel', '$date',  '$author')");
    echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
    echo "<script>window.location.href='index.php?page=siganishut'</script>";    
    // $id = $_GET['id_kph']
    // if (isset($id = $_GET['id_kph'] ) ==isset$id = $_GET['id_kph']) {
        // $judul = $_POST['judul'];
        // // $kategori = $_POST['kategori'];
        // $date = $_POST['tanggal'];
        // $artikel = $_POST['artikel'];
        // $author = $_SESSION['pengguna'];
        // $sql = mysqli_query($con, "UPDATE tbl_posts SET  judul='$judul', artikel='$artikel' WHERE id_kph='$id'");
        // echo "<script>alert('Data Berhasil diupdate!')</script>";
        // echo "<script>window.location.href='index.php?page=kph'</script>";   
    }
// }else{
//     echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
// }
    
    

?>
 