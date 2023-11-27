<?php
if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Riwayat Pelanggaran</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
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
        <img src="assets/profil/profil.png" alt="" class="foto_profil">
        <h3 class="nama_profil">Rizky Arifiansyah</h3>
        <div class="containerBars containerBarsDefault">
          <i class="fa-solid fa-bars icon_bars toggle_bars"></i>
        </div>
      </div>
      <ul>
        <li class="mb-2 sidebar_item"><a href="mahasiswa.php" class="text_sidebar"><img src="assets/icon/dashboard.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Dashboard</span></a></li>
        <li class="mb-2 sidebar_item"><a href="#" class="text_sidebar"><img src="assets/icon/laporan_penggunaan.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Riwayat Pelanggaran</span></a></li>
        <li class="mb-2 sidebar_item"><a href="ubah_password.php" class="text_sidebar"><img src="assets/icon/password.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">Ubah Password</span></a></li>
        <li class="mb-2 sidebar_item"><a href="logout.php" class="text_sidebar"><img src="assets/icon/logout.png" class="inline icon_sidebar" alt=""><span class="sidebar_text">LogOut</span></a></li>
      </ul>
    </aside>

    <!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-2xl font-bold mb-2">Riwayat Pelanggaran</h1>
      <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
        <div class="flex-1 ml-4"><?php ?></div>
      </div>
      <hr class="hr_db">
      <div class="flex bg-white flex-col xl:flex-row">
        <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
        <div class="grid grid-cols-1 gap-4 mt-5">
        <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
          <table id="tableMahasiswa" class="min-w-full border ">
            <!-- Tambahkan header tabel di sini -->
            <thead>
              <tr class="border-b">
                <th class="py-2 px-4 border-r">Tanggal</th>
                <th class="py-2 px-4 border-r">Pelanggaran</th>
                <th class="py-2 px-4 border-r">Tingkat</th>
                <th class="py-2 px-4 border-r">Jen. Pelanggaran</th>
                <th class="py-2 px-4 border-r">Kompen</th>
                <th class="py-2 px-4 border-r">Aksi</th>
                <!-- Tambahkan header lainnya sesuai kebutuhan -->
              </tr>
            </thead>
            <?php
            include "koneksi.php";
            $nim = $_SESSION['username'];
            $query = "SELECT m.nim, m.nama, p.tanggal_pengaduan, pe.tingkat, pe.sanksi_pelanggaran, pe.pelanggaran
              FROM mahasiswa m 
              join pengaduan p on m.nim = p.nim
              join pelanggaran pe on p.pelanggaran_id = pe.pelanggaran_id
              WHERE m.nim = '$nim'";
            $result = mysqli_query($koneksi, $query);
            
            ?>
              <tbody>
                <!-- Tambahkan baris-baris data di sini -->
                <?php while ($row = mysqli_fetch_assoc($result)) {?>
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"><?= $row['tanggal_pengaduan']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['pelanggaran']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['tingkat']; ?></td>
                  <td class="py-2 px-4 border-r">
                    <div class="containerTingkatPelanggaran"><?php
                                                  if ($row['tingkat'] == '1') {
                                                    echo 'Sangat Berat';
                                                  } elseif ($row['tingkat'] == '2') {
                                                    echo 'Berat';
                                                  }elseif ($row['tingkat'] == '3'){
                                                    echo 'Cukup Berat';
                                                  }elseif ($row['tingkat'] == '4'){
                                                    echo 'Sedang';
                                                  }elseif ($row['tingkat'] == '5'){
                                                    echo 'Ringan';
                                                  }
                                                  ?></div>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['sanksi_pelanggaran']; ?></td>
                  <td class="py-2 px-4 border-r flex space-x-1.5">
                    <a href="#" class="bg-yellow-500 hover:bg-yellow-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="bg-red-500 hover:bg-red-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-trash"></i></a>
                  </td>
                  <!-- Tambahkan data lainnya sesuai kebutuhan -->
                </tr>
              <?php
            }
              ?>
              </tbody>
          </table>
        </div>
        <!-- Tambahkan elemen sesuai kebutuhan Anda -->
      </div>
      </div>
    </div>
    <script>
      $(document).ready(function() {
$('#tableMahasiswa').DataTable({
  rowReorder: {
    selector: 'td:nth-child(2)'
  },
  lengthChange: false,
  responsive: {
    breakpoints: [{
        name: 'bigdesktop',
        width: Infinity
      },
      {
        name: 'meddesktop',
        width: 1480
      },
      {
        name: 'smalldesktop',
        width: 1280
      },
      {
        name: 'medium',
        width: 1188
      },
      {
        name: 'tabletl',
        width: 1024
      },
      {
        name: 'btwtabllandp',
        width: 848
      },
      {
        name: 'tabletp',
        width: 768
      },
      {
        name: 'mobilel',
        width: 480
      },
      {
        name: 'mobilep',
        width: 320
      }
    ]
  }
});
$('#tableDosen_filter').append('<div id="buttonTambahDosen"><a onclick="showModal();"data-modal-toggle="static-modal" href="#" class="bg-blue-500 hover:bg-blue-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus"></i> Tombol Link</a></div>');
});
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