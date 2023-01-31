<?php

include "config/config.php";

$sql = mysqli_query($con, "SELECT * FROM tbl_organisasi");
$data = mysqli_fetch_array($sql);

?>
<img src="assets/img/struk-org.PNG" width="500" height="650">