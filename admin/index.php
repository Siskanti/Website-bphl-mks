<?php
ob_start();
session_start();

include "../config/config.php";

if (!$_SESSION['user']) {
  header("location: login.php");
}


require_once "template/header.php";

?>
<!-- Main content -->
<div class="content">
  <div class="container-fluid">

    <?php

    if (isset($_GET['page'])) {
      $page = $_GET['page'];

      switch ($page) {
        case 'home':
          include "dashboard/index.php";
          break;

        case 'tampil-beranda':
          include "beranda/data-beranda.php";
          break;

        case 'tambah-beranda':
          include "beranda/tambah-beranda.php";
          break;

        case 'hapus-beranda':
          include "beranda/hapus-beranda.php";
          break;

        case 'edit-beranda':
          include "beranda/edit-beranda.php";
          break;

        case 'tampil-berita':
          include "berita/data-berita.php";
          break;

        case 'tambah-berita':
          include "berita/tambah-berita.php";
          break;

        case 'hapus-berita':
          include "berita/hapus-berita.php";
          break;

        case 'edit-berita':
          include "berita/edit-berita.php";
          break;

        case 'kebijakan':
          include "kebijakan/index.php";
          break;

        case 'peraturan':
          include "peraturan/index.php";
          break;

        case 'galeri':
          include "galeri/index.php";
          break;

        case 'hapus-galeri':
          include "galeri/hapus-galeri.php";
          break;

        case 'struktur-organisasi':
          include "struktur/index.php";
          break;

        case 'user':
          include "akun/index.php";
          break;

        case 'sejarah':
          include "kategori/sejarah.php";
          break;

        case 'kpl_balai':
          include "kpl_balai/index.php";
          break;

        case 'data-kepalabalai':
          include "kepalabalai/data-kepalabalai.php";
          break;

        case 'edit-kepalabalai':
          include "kepalabalai/edit-kepalabalai.php";
          break;

        case 'hapus-kepalabalai':
          include "kepalabalai/hapus-kepalabalai.php";
          break;

        case 'tambah-kepalabalai':
          include "kepalabalai/tambah-kepalabalai.php";
          break;

        case 'kph':
          include "kph/index.php";
          break;
        case 'siganishut':
          include "siganishut/index.php";
          break;
        case 'sipuhh':
          include "sipuhh/index.php";
          break;
        case 'sirpbbi':
          include "sirpbbi/index.php";
          break;

        case 'sipnbp':
          include "sipnbp/index.php";
          break;

        case 'sehati':
          include "sehati/index.php";
          break;
        case 'sicakap':
          include "sicakap/index.php";
          break;

        case 'kontak':
          include "kontak/index.php";
          break;

        case 'hapus-kontak':
          include "kontak/hapus-kontak.php";
          break;
        case 'data-aturan':
          include "aturan2/data-aturan.php";
          break;

        case 'edit-aturan':
          include "aturan2/edit-aturan.php";
          break;

        case 'hapus-aturan':
          include "aturan2/hapus-aturan.php";
          break;
        case 'tambah-aturan':
          include "aturan2/tambah-aturan.php";
          break;

        default:
          echo "<center><h3>Maaf. Halaman tidak ada !</h3></center>";
          break;
      }
    } else {
      include "dashboard/index.php";
    }

    ?>

  </div>
  <!-- /. New Row -->
  <!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php

require_once "template/footer.php";

?>