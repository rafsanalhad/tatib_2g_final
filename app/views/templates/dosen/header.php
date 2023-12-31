<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dosen</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<body class="font-sans main">
  <!-- Navbar -->
  <nav class="navbar p-4 h-16 fixed top-0 w-full bg-gray-800 z-50">
    <div class="container-fluid mx-auto flex justify-between items-center">
      <div class="text-white font-bold text-xl">Sistem Tata Tertib</div>
      <div class="containerBarsMobile toggle_bars_mobile">
        <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="flex">
    <aside class="p-4 sidebar">
      <div class="profil_db">
        <img src="<?= BASEURL; ?>/img/profil/<?= $data['biodata']['dosen_img']?>" alt="" class="foto_profil">
        <h3 class="nama_profil"><?= $data['biodata']['nama']?></h3>
        <div class="containerBars containerBarsDefault">
          <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
        </div>
      </div>
      <ul>
        <li class="h-8 flex items-center sidebar_item" id="dashboard_dosen"><a href="<?= BASEURL; ?>/dosen" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
        <li class="h-8 flex items-center sidebar_item" id="riwayat_pengaduan_dosen"><a href="<?= BASEURL; ?>/dosen/riwayatPengaduan" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Riwayat Pengaduan</span></a></li>
        <li class="h-8 flex items-center sidebar_item"id="ubahPassword_dosen"><a href="<?= BASEURL; ?>/dosen/ubahPassword" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/ubahPassword.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Ubah Password</span></a></li>
        <li class="h-8 flex items-center sidebar_item" id="logout_dosen"><a onclick="confirmLogin()" href="#" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
      </ul>
    </aside>