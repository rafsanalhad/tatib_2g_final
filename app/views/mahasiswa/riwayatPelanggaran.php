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
                <th class="py-2 px-4 border-r">Kompen</th>
                <!-- Tambahkan header lainnya sesuai kebutuhan -->
              </tr>
            </thead>
            <?php
            // include "koneksi.php";
            // $nim = $_SESSION['username'];
            // $query = "SELECT m.nim, m.nama, p.tanggal_pengaduan, pe.tingkat, pe.sanksi_pelanggaran, pe.pelanggaran
            //   FROM mahasiswa m 
            //   join pengaduan p on m.nim = p.nim
            //   join pelanggaran pe on p.pelanggaran_id = pe.pelanggaran_id
            //   WHERE m.nim = '$nim'";
            // $result = mysqli_query($koneksi, $query);
            
            ?>
              <tbody>
                <!-- Tambahkan baris-baris data di sini -->
                <?//php while ($row = mysqli_fetch_assoc($result)) {?>
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"><?//= $row['tanggal_pengaduan']; ?></td>
                  <td class="py-2 px-4 border-r"><?//= $row['pelanggaran']; ?></td>
                  <td class="py-2 px-4 border-r text-center">
                    <?php
                      // if ($row['tingkat'] == '1') {
                      //   echo '<div class="w-[130px] h-[30px] rounded-md bg-red-700 px-1 text-lg font-medium text-white">Sangat Berat</div>';
                      // } elseif ($row['tingkat'] == '2') {
                      //   echo '<div class="w-[130px] h-[30px] rounded-md bg-orange-600 px-1 text-lg font-medium text-white">Berat</div>';
                      // }elseif ($row['tingkat'] == '3'){
                      //   echo '<div class="w-[130px] h-[30px] rounded-md bg-yellow-500 px-1 text-lg font-medium text-white">Cukup Berat</div>';
                      // }elseif ($row['tingkat'] == '4'){
                      //   echo '<div class="w-[130px] h-[30px] rounded-md bg-yellow-200 px-1 text-lg font-medium text-yellow-600">Sedang</div>';
                      // }elseif ($row['tingkat'] == '5'){
                      //   echo '<div class="w-[130px] h-[30px] rounded-md bg-green-200 px-1 text-lg font-medium text-green-700">Ringan</div>';
                      // }
                      ?>
                  </td>
                  <td class="py-2 px-4 border-r">
                  <a href="#"><button id="baru" class="bg-blue-500 hover:bg-blue-700 py-2 px-7 rounded text-white text-center" onclick="showModalProses()">Baru</button></a>
                  
                  <a href="<?= BASEURL; ?>/mahasiswa/uploadBuktiKompen"><button id="upload" class="bg-indigo-400 hover:bg-indigo-500 py-2 px-5 rounded text-white text-center hidden">Upload</button></a>
                  
                  <a href="#"><button id="proses" class="bg-orange-400 py-2 px-5 rounded text-white text-center hidden">Proses</button></a>
                  
                  <a href="#"><button id="diTolak" class="bg-red-500 hover:bg-red-700 py-2 px-4 rounded text-white text-center" href="#" onclick="showModalDitolak()">Ditolak</button></a>
                  
                  <a href="#"><button class="bg-green-500 py-2 px-4 rounded text-white text-center">Selesai</button></a>
                  </td>
                </tr>
              <?php
            // }
              ?>
              </tbody>
          </table>
        </div>
        <!-- Tambahkan elemen sesuai kebutuhan Anda -->
      </div>
      </div>
    </div>
    <div id="modalProses" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black opacity-50 "></div>
    <div class="flex items-center justify-center min-h-screen p-4">
      <div class="bg-white w-full max-w-3xl p-8 rounded-lg shadow-md relative">
        <!-- Tombol untuk menutup modal -->
        <button id="tutupModal" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
          <i class="fa-solid fa-times"></i>
        </button>
        <h3 class="text-2xl mb-7 font-bold">Sanksi</h3>
        <div class="text-right">
        <button class="bg-orange-400 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded" id="kerjakan" onclick="showElement()">
          kerjakan
        </button>
        </div>
      </div>
    </div>
  </div>
    <div id="modalTolak" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black opacity-50 "></div>
    <div class="flex items-center justify-center min-h-screen p-4">
      <div class="bg-white w-full max-w-3xl p-8 rounded-lg shadow-md relative">
        <!-- Tombol untuk menutup modal -->
        <button id="tutupModal1" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
          <i class="fa-solid fa-times"></i>
        </button>
        <h3 class="text-2xl mb-7 font-bold">Tolak</h3>
        <div class="text-right">
        <a href="<?= BASEURL; ?>/mahasiswa/uploadBuktiKompen"><button id="tutupModalKompen2" class="bg-orange-400 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
          Upload Ulang
        </button></a>
        
        </div>
      </div>
    </div>
  </div>

    <script>
        function hideElement() {
            document.getElementById('baru').classList.add('hidden');
        }
        function showElement() {
            document.getElementById('upload').classList.remove('hidden');
        }

const modalKompen = document.getElementById('modalProses');
        const showModalProses = () => {
          $('.sidebar').addClass('sidebar-backdrop');
          modalKompen.classList.remove('hidden');
        }
        const tutupModalKompen = document.getElementById('tutupModal');

        tutupModalKompen.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          modalKompen.classList.add('hidden');
        });

const modalKompen1 = document.getElementById('modalTolak');
        const showModalDitolak = () => {
          $('.sidebar').addClass('sidebar-backdrop');
          modalKompen1.classList.remove('hidden');
        }
        const tutupModalKompen1 = document.getElementById('tutupModal1');

        tutupModalKompen1.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          modalKompen1.classList.add('hidden');
        });

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
    </script>