<?php

include "config/config.php";

$id = $_GET['id'];

$query = mysqli_query($con, "SELECT * FROM tbl_aturann WHERE id_aturann='$id'");
$data = mysqli_fetch_array($query);

// $sql = mysqli_query($con, "SELECT * FROM tbl_aturann");
// $data = mysqli_fetch_array($sql);

?>
<h4>Aturan</h4>
<embed type="application/pdf" src="assets/file/pdf/aturan/<?= $data['img'] ?>" style="width: 100%; height: 100vh;"></embed>