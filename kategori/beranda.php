<?php

include "config/config.php";

$query = mysqli_query($con, "SELECT * FROM tbl_posts ORDER BY date desc");

?>


<?php foreach ($query as $data) : ?>
	<div class="col-md-4 col-xs-12 mt-3">
		<h3 class="text-success" style="height: 100px;"><?= $data['judul'] ?></h3>
		<img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-thumbnail">
		<div>
			<i class="ion-calendar">&nbsp; <?= $data['date'] ?> &nbsp; / &nbsp;</i>
			<i class="ion-person">&nbsp; <?= $data['author'] ?></i>
		</div>
		<p class="article-text">
			<?= substr($data['artikel'], 0, 100) ?>
		</p>
		<a href="index.php?page=detail&id=<?= $data['id_post'] ?>" class="btn btn-success">Baca Selengkapnya</a>
	</div>
<?php endforeach; ?>
</div>
</div>