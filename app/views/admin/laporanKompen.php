<div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
<div id="laporan_kompen">
  <div class="containerBars_toggled">
    <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
  </div>
  <h1 class="text-2xl font-bold mb-2">Laporan Kompen</h1>

  <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
    <div class="flex-1 ml-4">Kelola Data Mahasiswa</div>
  </div>
  <hr class="hr_db">
  <div class="flex bg-white">
    <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
      <!-- <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div> -->
      <div class="grid grid-cols-1 gap-4 mt-5">
        <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
          <table id="tableKompen" class="min-w-full border ">
            <!-- Tambahkan header tabel di sini -->
            <thead>
              <tr class="border-b">
                <th class="py-2 px-4 border-r">Tanggal</th>
                <th class="py-2 px-4 border-r">Nama Mahasiswa</th>
                <th class="py-2 px-4 border-r">NIM</th>
                <th class="py-2 px-4 border-r">Tingkat</th>
                <th class="py-2 px-4 border-r">Jen. Pelanggaran</th>
                <th class="py-2 px-4 border-r">Aksi</th>
                <!-- Tambahkan header lainnya sesuai kebutuhan -->
              </tr>
            </thead>
            <?php
            // include "koneksi.php";
            // $query = "SELECT * FROM dosen";
            // $result = mysqli_query($koneksi, $query);
            // while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tbody>
                <!-- Tambahkan baris-baris data di sini -->
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"> <img src="assets/profil/profil.png" alt="" class="foto_profil_dosen_table inline ">
                    <p class="nama_dosen_table inline"><?//= $row['nama']; ?></p>
                  </td>
                  <td class="py-2 px-4 border-r"><?//= $row['nip']; ?></td>
                  <td class="py-2 px-4 border-r"><?//= $row['TTL']; ?></td>
                  <!-- <td class="py-2 px-4 border-r">
                    <div class="containerJenkel"><?php
                                                  // if ($row['jenis_kelamin'] == 'L') {
                                                  //   echo 'Laki-laki';
                                                  // } else {
                                                  //   echo 'Perempuan';
                                                  // }
                                                  ?></div>
                  </td> -->
                  <td class="py-2 px-4 border-r"><?//= $row['no_phone']; ?></td>
                  <td class="py-2 px-4 border-r"><?//= $row['alamat']; ?></td>
                  <td class="py-2 px-4 border-r ">
                    <a href="#" class="bg-yellow-500 hover:bg-yellow-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline" onclick="showModalKompen();"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="#" class="bg-green-500 hover:bg-green-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline"><i class="fa-solid fa-check"></i></a>
                  </td>
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

    <!-- Tambahkan elemen sesuai kebutuhan Anda -->
  </div>
</div>
</div>
<?php // include 'modal_kompen.php' ?>
<div id="static-modal-kompen" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
  <!-- Backdrop -->
  <div class="fixed inset-0 bg-black opacity-50 ">

  </div>

  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white w-full max-w-3xl h-500 p-8 rounded-lg shadow-md relative">
      <!-- Tombol untuk menutup modal -->
      <button id="tutupModalKompen" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-times"></i>
      </button>
      <!-- Konten Modal -->
      <!-- <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1> -->

      <div class="flex flex-col md:flex-row">
        <div class="w-1/4">
          <img src="assets/profil/freya.png" alt="" style="border: none; height: 230px !important;">
        </div>
        <div class="containerFormModal w-3/4 ml-3">
          <div class="">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">Nama</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">Freya</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="flex items-center w-200">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">NIM</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">2241720040</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">Jenis Kelamin</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">Perempuan</p>
              </div>
            </div>
          </div>
          <div class="">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">No Telp</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">085767456876</p>
              </div>
            </div>
          </div>
          <div class="mb-1">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">Jurusan</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">Teknik Informatika</p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">No. Telp Ortu</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full">085767456876</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h3 class="font-bold text-lg mb-3">Pelanggaran</h3>
      <div>
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-md overflow-hidden">
          <thead class="bg-gray-100">
            <tr>
              <th class="py-2 px-4 border-b">Tanggal</th>
              <th class="py-2 px-4 border-b">Jenis Pelanggaran</th>
              <th class="py-2 px-4 border-b">Tingkat</th>
              <th class="py-2 px-4 border-b">Bukti</th>
            </tr>
          </thead>
          <tbody>
            <tr class="hover:bg-gray-50">
              <td class="py-2 px-4 border-b">12 November 2023</td>
              <td class="py-2 px-4 border-b">Tidak menjaga kebersihan di seluruh area Polinema</td>
              <td class="py-2 px-4 border-b">Cukup berat</td>
              <td class="py-2 px-4 border-b">
                <a href="#" class="text-blue-500 hover:underline">Download</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <div class="form flex mt-3">
          <div class="block">
            <label for="sanksi">
              <h3 class="font-bold text-base">Sanksi</h3>
            </label>
            <select name="jenisSanksi" id="jenisSanksi" class="border border-neutral-400 w-[250px] h-[40px] rounded-lg">
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
            // $row = mysqli_fetch_assoc($result)
            ?>
            <?//php while ($row = mysqli_fetch_assoc($result)) {?>
          <option value="<?//=$row['pelanggaran'];?>"><?//php echo $row['pelanggaran'];?></option>  
            <?//php }?>
          </select>

          </div>
          <div class="block ml-5">
            <label for="sanksi">
              <h3 class="font-bold text-base">Catatan</h3>
            </label>
            <textarea class="w-full h-14 p-2 border rounded-md resize-none focus:outline-none focus:border-blue-500"></textarea>

          </div>
        </div>
      </div>
      <div class="flex w-full">
        <div class="ml-auto">
          <button id="tutupModalKompen2" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Tolak
          </button>
          <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Simpan
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {


    $('#tableKompen').DataTable({
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
    // $('#tableMahasiswa_filter').append('<div id="buttonTambahDosen"><a href="#" class="bg-blue-500 hover:bg-blue-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus"></i> Tombol Link</a></div>');
  });
</script>