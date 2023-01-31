<?php

include "config/config.php";

$sql = mysqli_query($con, "SELECT * FROM tbl_kontakk");

?>
<div class="row text-center">
    <?php foreach ($sql as $data) : ?>
        <div class="mt-3">
            <img src="assets/imgg/<?= $data['nama'] ?>" alt="" class="img-thumbnail" style="width:1000px; height:500px;">
        </div>
    <?php endforeach; ?>
</div>