<?php 


include "config/config.php";

$sql = mysqli_query($con, "SELECT * FROM tbl_siganishut");
$data = mysqli_fetch_array($sql);
// $id = $_GET['id_kph'];
	
 ?>
 


 <div class="col-lg-10 col-xs-12">
	<h3><?= $data['judul'] ?></h3>
	<p class="mt-3 text-muted" style="font-size: 12px;"><i class="ion-calendar"></i>&nbsp;<?= $data['date'] ?>&nbsp;</a></p>		
	<p class="mt-4 text-justify"><?= $data['artikel'] ?></p>
 </div>
 <div class="col-lg-2"></div>
