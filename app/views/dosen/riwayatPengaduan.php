    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-2xl font-bold mb-2">Riwayat Pengaduan</h1>
      <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
        <div class="flex-1 ml-4">Riwayat Pengaduan</div>
      </div>
      <hr class="hr_db">
      <div class="flex bg-white flex-col xl:flex-row">
        <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
        <div class="grid grid-cols-1 gap-4">
        <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
          <table id="riwayatPengaduan" class="min-w-full border">
            <!-- Tambahkan header tabel di sini -->
            <thead>
              <tr class="border-b">
                <th class="py-2 px-4 border-r">Tanggal</th>
                <th class="py-2 px-4 border-r">Nama Mahasiswa</th>
                <th class="py-2 px-4 border-r">NIM</th>
                <th class="py-2 px-4 border-r">Prodi</th>
                <th class="py-2 px-4 border-r">Tingkat</th>
                <th class="py-2 px-4 border-r">Jen. Pelanggaran</th>
                <th class="py-2 px-4 border-r">Status</th>
                <!-- Tambahkan header lainnya sesuai kebutuhan -->
              </tr>
            </thead>
            <?php
            // include "koneksi.php";
            // $nip = $_SESSION['username'];
            // $query = "SELECT m.nim, m.nama, p.tanggal_pengaduan, pe.tingkat, pe.pelanggaran
            // FROM mahasiswa m 
            // join pengaduan p on m.nim = p.nim
            // join pelanggaran pe on p.pelanggaran_id = pe.pelanggaran_id
            // JOIN dosen d on p.nip = d.nip
            // WHERE d.nip = '$nip'";
            // $result = mysqli_query($koneksi, $query);
            ?>
              <tbody>
              <?php foreach ($data['pengaduan'] as $row) {
              ?>
                <!-- Tambahkan baris-baris data di sini -->
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"><?= $row['tanggal_pengaduan']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['nama']; ?></p></td>
                  <td class="py-2 px-4 border-r"><?= $row['nim']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['prodi_nama']; ?></td>
                  <td class="py-2 px-4 border-r text-center">
                    <?php
                      if ($row['tingkat'] == '1') {
                        echo '<div class="w-[130px] h-[30px] rounded-md bg-red-700 px-1 text-lg font-medium text-white">Sangat Berat</div>';
                      } elseif ($row['tingkat'] == '2') {
                        echo '<div class="w-[130px] h-[30px] rounded-md bg-orange-600 px-1 text-lg font-medium text-white">Berat</div>';
                      }elseif ($row['tingkat'] == '3'){
                        echo '<div class="w-[130px] h-[30px] rounded-md bg-yellow-500 px-1 text-lg font-medium text-white">Cukup Berat</div>';
                      }elseif ($row['tingkat'] == '4'){
                        echo '<div class="w-[130px] h-[30px] rounded-md bg-yellow-200 px-1 text-lg font-medium text-yellow-600">Sedang</div>';
                      }elseif ($row['tingkat'] == '5'){
                        echo '<div class="w-[130px] h-[30px] rounded-md bg-green-200 px-1 text-lg font-medium text-green-700">Ringan</div>';
                      }
                      ?>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['pelanggaran']; ?></td>
                  <td class="py-2 px-4 border-r text-center">
                    <?php 
                    if ($row['status_pengaduan'] == 'proses') {
                      echo '<a href="#"><button class="w-[130px] h-[30px] rounded-md bg-yellow-500 text-lg font-medium text-white">Proses</button></a>';
                    }elseif ($row['status_pengaduan'] == 'valid') {
                      echo '<a href="#"><button class="w-[130px] h-[30px] rounded-md bg-green-400 text-lg font-medium text-white">Diterima</button></a>';
                    }else{
                      echo '  <a href="#"><button class="w-[130px] h-[30px] rounded-md bg-red-500 text-lg font-medium text-white hover:bg-red-700" onclick="showModalDitolak('. $row['pengaduan_id'] .')">Ditolak</button></a>';
                    }
                    ?>
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
    <div id="modalTolakLapor" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black opacity-50 "></div>
    <div class="flex items-center justify-center min-h-screen p-4">
      <div class="bg-white w-full max-w-3xl p-8 rounded-lg shadow-md relative">
        <!-- Tombol untuk menutup modal -->
        <button id="tutupModal" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
          <i class="fa-solid fa-times"></i>
        </button>
        <h3 class="text-2xl mb-7 font-bold text center">Alasan</h3>
        <div class="flex border border-grey-400">
          <p id="catatan"></p>
        </div>
      </div>
    </div>
  </div>

    <script>
        $('#riwayat_pengaduan_dosen').addClass('bg-blue-400');
      const modalKompen = document.getElementById('modalTolakLapor');
        const showModalDitolak = (id) => {
          console.log(id);
          $('.sidebar').addClass('sidebar-backdrop');
          $.ajax({
            url: '<?= BASEURL; ?>/Dosen/getPengaduanById/' + id,
            type: 'GET',
            dataType: 'json',
            success: function(response) {
              console.log(response.catatan);
              $('#catatan').html(response.catatan);
            },
            error: function(error) {
              console.log(error);
              alert("Error: " + xhr.status + "\n" + xhr.responseText);
            }
          });
          modalKompen.classList.remove('hidden');
        }
        const tutupModalKompen = document.getElementById('tutupModal');

        tutupModalKompen.addEventListener('click', function() {
          $('.sidebar').removeClass('sidebar-backdrop');
          modalKompen.classList.add('hidden');
        });
      $(document).ready(function() {
$('#riwayatPengaduan').DataTable({
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