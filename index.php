<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar dan Sidebar</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="font-sans main">
  <!-- Navbar -->
  <nav class="navbar p-4 h-16">
    <div class="container-fluid mx-auto flex justify-between items-center">
      <div class="text-white font-bold text-xl">Sistem Tata Tertib</div>
      <!-- <div>
        <a href="#" class="text-white mr-4">Home</a>
        <a href="#" class="text-white mr-4">About</a>
        <a href="#" class="text-white">Contact</a>
      </div> -->
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="flex">
    <aside class="p-4 sidebar">
      <div class="profil_db">
        <img src="assets/profil/profil.png" alt="" class="foto_profil">
        <h3 class="nama_profil">AdminRizky</h3>
        <div class="containerBars">
          <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
        </div>
      </div>
      <ul>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/data_dosen.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Dosen</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/data_mahasiswa.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Mahasiswa</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Laporan Penggunaan</span></a></li>
      </ul>
    </aside>

    <!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm">
      <div class="containerBars_toggled inline">
        <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
      </div>
      <h1 class="text-2xl font-bold mb-4 inline">Dashboard</h1>

      <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
        <div class="flex-1 ml-4">Ringkasan System</div>
      </div>
      <hr class="hr_db">
      <div class="flex bg-white">
        <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
          <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div>
          <div class="grid grid-cols-2 gap-4 mt-5">
            <div class="bg-white p-4 shadow-lg">
              <div class="inline-flex">
                <img src="assets/img/dosen.png" alt="">
                <div class="block ml-2">
                  <div class="text-2xl inline">Dosen</div>
                  <div class="text-xl block">8</div>
                </div>
              </div>


            </div>
            <div class="bg-white p-4 shadow-lg">
              <div class="inline-flex">
                <img src="assets/img/jurusan.png" alt="">
                <div class="block ml-2">
                  <div class="text-2xl inline">Dosen</div>
                  <div class="text-xl block">8</div>
                </div>
              </div>
            </div>
            <div class="bg-white p-4 shadow-lg">
              <div class="inline-flex">
                <img src="assets/img/pelanggaran.png" alt="">
                <div class="block ml-2">
                  <div class="text-2xl inline">Dosen</div>
                  <div class="text-xl block">8</div>
                </div>
              </div>
            </div>
            <div class="bg-white p-4 shadow-lg">
              <div class="inline-flex">
                <img src="assets/img/user.png" alt="">
                <div class="block ml-2">
                  <div class="text-2xl inline">Dosen</div>
                  <div class="text-xl block">8</div>
                </div>
              </div>
            </div>
            <!-- Tambahkan elemen sesuai kebutuhan Anda -->
          </div>

        </div>

        <div class="flex-1 bg-white pelanggaran_terbaru shadow-lg">
          <h3 class="pelanggaran_tbr_title">Pelanggaran Terbaru</h3>
          <hr class="hr_pelanggaran">
          <hr class="hr_db">
          <div class="biodata_pelanggar">
            <div class="profil_pelanggar flex">
              <p class="nama_pelanggar">Arya Chandra Kusuma</p>
              <p class="nim_pelanggar">NIM (2241720040)</p>
            </div>
            <div class="tanggal_pelanggaran_container flex">
              <p class="tanggal_pelanggaran">16 November 2023</p>
            </div>
            <div class="penyebab_pelanggaran_container flex">
              <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
              <p class="bobot_cukup_berat">Cukup Berat</p>
            </div>
            <hr class="hr_db">
          </div>
          <div class="biodata_pelanggar">
            <div class="profil_pelanggar flex">
              <p class="nama_pelanggar">Arya Chandra Kusuma</p>
              <p class="nim_pelanggar">NIM (2241720040)</p>
            </div>
            <div class="tanggal_pelanggaran_container flex">
              <p class="tanggal_pelanggaran">16 November 2023</p>
            </div>
            <div class="penyebab_pelanggaran_container flex">
              <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
              <p class="bobot_cukup_berat">Cukup Berat</p>
            </div>
            <hr class="hr_db">
          </div>
          <div class="biodata_pelanggar">
            <div class="profil_pelanggar flex">
              <p class="nama_pelanggar">Arya Chandra Kusuma</p>
              <p class="nim_pelanggar">NIM (2241720040)</p>
            </div>
            <div class="tanggal_pelanggaran_container flex">
              <p class="tanggal_pelanggaran">16 November 2023</p>
            </div>
            <div class="penyebab_pelanggaran_container flex">
              <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
              <p class="bobot_cukup_berat">Cukup Berat</p>
            </div>
            <hr class="hr_db">
          </div>
          <div class="biodata_pelanggar">
            <div class="profil_pelanggar flex">
              <p class="nama_pelanggar">Arya Chandra Kusuma</p>
              <p class="nim_pelanggar">NIM (2241720040)</p>
            </div>
            <div class="tanggal_pelanggaran_container flex">
              <p class="tanggal_pelanggaran">16 November 2023</p>
            </div>
            <div class="penyebab_pelanggaran_container flex">
              <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
              <p class="bobot_cukup_berat">Cukup Berat</p>
            </div>
            <hr class="hr_db">
          </div>
          <div class="biodata_pelanggar">
            <div class="profil_pelanggar flex">
              <p class="nama_pelanggar">Arya Chandra Kusuma</p>
              <p class="nim_pelanggar">NIM (2241720040)</p>
            </div>
            <div class="tanggal_pelanggaran_container flex">
              <p class="tanggal_pelanggaran">16 November 2023</p>
            </div>
            <div class="penyebab_pelanggaran_container flex">
              <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
              <p class="bobot_cukup_berat">Cukup Berat</p>
            </div>
            <hr class="hr_db">
          </div>
          <div class="biodata_pelanggar">
            <div class="profil_pelanggar flex">
              <p class="nama_pelanggar">Arya Chandra Kusuma</p>
              <p class="nim_pelanggar">NIM (2241720040)</p>
            </div>
            <div class="tanggal_pelanggaran_container flex">
              <p class="tanggal_pelanggaran">16 November 2023</p>
            </div>
            <div class="penyebab_pelanggaran_container flex">
              <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
              <p class="bobot_cukup_berat">Cukup Berat</p>
            </div>
            <hr class="hr_db">
          </div>
        </div>
        <!-- Tambahkan elemen sesuai kebutuhan Anda -->
      </div>
    </div>

    <script>
      $('.toggle_bars').on("click", function() {
        $('.sidebar').toggleClass('sidebar_toggled');
        $('.main').toggleClass('main_toggled');
      })
    </script>

</body>

</html>