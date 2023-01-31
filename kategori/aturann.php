<?php

include "config/config.php";

$query = mysqli_query($con, "SELECT * FROM tbl_aturann");


?>

<?php foreach ($query as $data) : ?>
    <div class="col-md-4 col-xs-12 mt-3">
        <h3 class="text-success" style="height: 100px;"><?= $data['judul'] ?></h3>


        <a href="index.php?page=detail-aturan&id=<?= $data['id_aturann'] ?>" class="btn btn-success">Detail Aturan</a>
    </div>
<?php endforeach; ?>
</div>
</div>