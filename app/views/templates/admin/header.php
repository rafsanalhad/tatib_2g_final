  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar dan Sidebar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </head>

  <body class="font-sans main">
    <!-- Navbar -->
    <nav class="navbar p-4 h-16 fixed top-0 w-full bg-gray-800 z-50">
      <div class="container-fluid mx-auto flex justify-between items-center">
        <div class="text-white font-bold text-xl">Sistem Tata Tertib</div>
        <!-- <div>
            <a href="#" class="text-white mr-4">Home</a>
            <a href="#" class="text-white mr-4">About</a>
            <a href="#" class="text-white">Contact</a>
        </div> -->
        <div class="containerBarsMobile toggle_bars_mobile">
          <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
        </div>
      </div>
    </nav>

    <!-- Sidebar -->
    <div class="flex">
      <aside class="p-4 sidebar">
        <div class="profil_db">
          <img src="<?= BASEURL; ?>/img/profil/profil.png" alt="" class="foto_profil">
          <h3 class="nama_profil">AdminRizky</h3>
          <div class="containerBars containerBarsDefault">
            <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
          </div>
        </div>
        <ul>
          <li class="mb-2 sidebar_item" id="dashboard_nav"><a href="<?= BASEURL; ?>/admin" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
          <li class="mb-2 sidebar_item" id="data_dosen_nav"><a href="<?= BASEURL; ?>/admin/dosen" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/data_dosen.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Dosen</span></a></li>
          <li class="mb-2 sidebar_item" id="data_mahasiswa_nav"><a href="<?= BASEURL; ?>/admin/mahasiswa" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/data_mahasiswa.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Mahasiswa</span></a></li>
          <li class="mb-2 sidebar_item relative" id="laporan_nav">
            <a href="#" class="text_sidebar flex items-center">
              <img src="<?= BASEURL; ?>/img/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt="">
              <span class="sidebar_text">Laporan</span>
            </a>
            <ul class="left-0 top-full hidden mt-2 bg-white submenu_laporan">
              <li id="laporan_pelanggaran_nav"><a href="<?= BASEURL; ?>/admin/laporanPelanggaran" class="text_sidebar ml-2"><img src="<?= BASEURL; ?>/img/icon/warning.png" class="inline icon_sidebar" alt="">Laporan Pelanggaran</a></li>
              <li id="laporan_kompen_nav"><a href="<?= BASEURL; ?>/admin/laporanKompen" class="text_sidebar ml-2"><img src="<?= BASEURL; ?>/img/icon/centangKotak.png" class="inline icon_sidebar" alt="">Laporan Kompen</a></li>
            </ul>
          </li>

          <li class="mb-2 sidebar_item"><a href="#" onclick="confirmLogin()" class="text_sidebar"><img src="<?= BASEURL; ?>/img/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
        </ul>
      </aside>
      <script>
        // Script untuk menangani keadaan aktif pada elemen
        document.addEventListener('DOMContentLoaded', function() {
          const sidebarItems = document.querySelectorAll('.sidebar_item');

          sidebarItems.forEach(item => {
            item.addEventListener('click', function() {
              sidebarItems.forEach(item => item.classList.remove('sidebar_item_aktif'));
              this.classList.add('sidebar_item_aktif');
            });
          });
        });
      </script>
      <script>
        const confirmLogin = () => {
          Swal.fire({
            title: 'Apakah anda yakin ingin keluar?',
            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: `Keluar`,
            confirmButtonColor: '#28a745',
            denyButtonText: `Batal`,
          }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
              window.location.href = "<?= BASEURL; ?>/logout";
            }
          })
        }
        document.addEventListener('DOMContentLoaded', function() {
          var laporanNav = document.getElementById('laporan_nav');
          var dropdown = laporanNav.querySelector('ul');

          laporanNav.addEventListener('click', function() {
            laporanNav.classList.add('active_dropdown_laporan');
            dropdown.style.display = dropdown.style.display === 'none' ? 'block' : 'none';
          });
        });
      </script>