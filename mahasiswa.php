<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="font-sans main">
  <!-- Navbar -->
  <nav class="navbar p-4 h-16 fixed top-0 w-full bg-gray-800">
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
        <img src="assets/profil/profil.png" alt="" class="foto_profil">
        <h3 class="nama_profil">Rizky Arifiansyah</h3>
        <div class="containerBars containerBarsDefault">
          <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
        </div>
      </div>
      <ul>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/data_dosen.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Dosen</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/data_mahasiswa.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Data Mahasiswa</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Laporan Penggunaan</span></a></li>
        <li class="mb-2 sidebar_item"><a href="logout.php" class="text_sidebar"><img src="assets/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
      </ul>
    </aside>

    <!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-2xl font-bold mb-2">Dashboard</h1>
      <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
        <div class="flex-1 ml-4">Ringkasan System</div>
      </div>
      <hr class="hr_db">
      <div class="flex bg-white flex-col xl:flex-row">
        <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
          <div class="flex-1 notif_db h-10 flex items-center pl-2">
          <p><b>Info! </b>Berikut adalah Biodata diri anda</p>
          </div>
          <table class="items-center">
            <tbody>
              <tr>
                <td class="border-2 border-slate-700 p-auto" rowspan="10"><img src="assets/profil/mhs1.png" alt=""></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Nama</td>
                <td class="border-2 border-slate-700">Rizky Arifiansyah</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">NIM</td>
                <td class="border-2 border-slate-700">2241720040</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">TTL</td>
                <td class="border-2 border-slate-700">Tangerang, 13 Feb 2006</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Jen. Kelamin</td>
                <td class="border-2 border-slate-700">Perempuan</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Jurusan</td>
                <td class="border-2 border-slate-700">Teknik Informatika</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Alamat</td>
                <td class="border-2 border-slate-700">Jl. Soehat No. 8 Malang</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Email</td>
                <td class="border-2 border-slate-700">Nasyifa@gmail.com</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Phone</td>
                <td class="border-2 border-slate-700">081234567890</td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Phone Ortu</td>
                <td class="border-2 border-slate-700">081234567890</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="flex-1 bg-white jumlah_pelanggaran shadow-lg">
          <h3 class="pelanggaran_tbr_title">Jumlah Pelanggaran</h3>
          <hr class="hr_pelanggaran">
          <hr class="hr_db">
        </div>
    </div>

    <script>
    const checkWidth = () => {
        var windowWidth = $(window).width();
        var sidebar = $(".sidebar");

        if (windowWidth <= 768) {
            sidebar.addClass("fixed_sidebar");
            $('.containerBarsMobile').removeClass("toggle_bars_mobile");
            $('.containerBarsDefault').css('visibility', 'hidden');
            $('.containerBars_toggled').css('visibility', 'hidden');
        } else {
            sidebar.removeClass("fixed_sidebar");
            $('.containerBarsMobile').addClass("toggle_bars_mobile");
            $('.containerBarsDefault').css('visibility', 'visible');
            $('.containerBars_toggled').css('visibility', 'visible');
        }
    }
    $(document).ready(function () {
        checkWidth();
        $('.toggle_bars').on("click", function () {
            $('.sidebar').toggleClass('sidebar_toggled');
            $('.main').toggleClass('main_toggled');
        });

        $(window).resize(function () {
            checkWidth();
        });
    });
</script>


</body>

</html>