<?php

include "config/config.php";

$query = mysqli_query($con, "SELECT * FROM tbl_kepalabalai WHERE kategori='kepalabalai' ORDER BY date DESC");

?>

<?php foreach ($query as $data) : ?>
	<div class="col-md-4 col-xs-12 mt-3">
		<img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-thumbnail">
		<h5 class="text-primary" style="height: 30px;"><?= $data['judul'] ?></h5>
		<p class="article-text">
			<?= substr($data['artiker'], 0, 100) ?>
		</p>
	</div>
<?php endforeach; ?>
</div>
</div>