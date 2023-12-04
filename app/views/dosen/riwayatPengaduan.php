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
              <?//php while ($row = mysqli_fetch_assoc($result)) {?>
                <!-- Tambahkan baris-baris data di sini -->
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"><?//= $row['tanggal_pengaduan']; ?></td>
                  <td class="py-2 px-4 border-r"><?//= $row['nama']; ?></p></td>
                  <td class="py-2 px-4 border-r"><?//= $row['nim']; ?></td>
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
                  <td class="py-2 px-4 border-r"><?//= $row['pelanggaran']; ?></td>
                  <!-- proses -->
                  <!-- <td class="py-2 px-4 border-r text-center">
                    <a href="#"><button class="w-[130px] h-[30px] rounded-md bg-yellow-500 text-lg font-medium text-white hover:bg-yellow-700">Proses</button></a>
                  </td> -->
                  <!-- proses diterima -->
                  <td class="py-2 px-4 border-r text-center">
                    <a href="#"><button class="w-[130px] h-[30px] rounded-md bg-green-400 text-lg font-medium text-white hover:bg-green-800">Diterima</button></a>
                  </td>
                  <!-- proses ditolak -->
                  <!-- <td class="py-2 px-4 border-r text-center">
                    <a href="#"><button class="w-[130px] h-[30px] rounded-md bg-red-500 text-lg font-medium text-white hover:bg-red-700">Ditolak</button></a>
                  </td> -->
                  <!-- Tambahkan data lainnya sesuai kebutuhan -->
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

    <script>
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