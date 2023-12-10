<div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
  <div id="laporan_pelanggaran">
    <div class="containerBars_toggled">
      <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
    </div>
    <h1 class="text-2xl font-bold mb-2">Laporan Pelanggaran</h1>

    <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
      <div class="flex-1 ml-4">Kelola Data Mahasiswa</div>
    </div>
    <hr class="hr_db">
    <div class="flex bg-white">
      <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
        <!-- <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div> -->
        <div class="grid grid-cols-1 gap-4 mt-5">
          <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
            <table id="tableLaporan" class="min-w-full border ">
              <!-- Tambahkan header tabel di sini -->
              <thead>
                <tr class="border-b">
                  <th class="py-2 px-4 border-r">Tanggal</th>
                  <th class="py-2 px-4 border-r">Pelapor</th>
                  <th class="py-2 px-4 border-r">Nama Mahasiswa</th>
                  <th class="py-2 px-4 border-r">NIM</th>
                  <th class="py-2 px-4 border-r">Tingkat</th>
                  <th class="py-2 px-4 border-r">Jen. Pelanggaran</th>
                  <th class="py-2 px-4 border-r">Aksi</th>
                  <!-- Tambahkan header lainnya sesuai kebutuhan -->
                </tr>
              </thead>
              <?php
              foreach ($data['laporanKompen'] as $row) :
              ?>
                <tbody>
                  <!-- Tambahkan baris-baris data di sini -->
                  <tr class="border-b">
                    <td class="py-2 px-4 border-r"><?= $row['tanggal_pengaduan']; ?></td>
                    <td class="py-2 px-4 border-r"><?= $row['nama_dosen']; ?></td>
                    <td class="py-2 px-4 border-r">
                      <p class="nama_dosen_table inline"><?= $row['nama']; ?></p>
                    </td>
                    <td class="py-2 px-4 border-r">
                      <p class="nama_dosen_table inline"><?= $row['nim']; ?></p>
                    </td>
                    <td class="py-2 px-4 border-r text-center"><?php
                                                                if ($row['tingkat'] == '1') {
                                                                  echo '<div class="w-[130px] h-[30px] rounded-md bg-red-700 px-1 text-lg font-medium text-white">Sangat Berat</div>';
                                                                } elseif ($row['tingkat'] == '2') {
                                                                  echo '<div class="w-[130px] h-[30px] rounded-md bg-orange-600 px-1 text-lg font-medium text-white">Berat</div>';
                                                                } elseif ($row['tingkat'] == '3') {
                                                                  echo '<div class="w-[130px] h-[30px] rounded-md bg-yellow-500 px-1 text-lg font-medium text-white">Cukup Berat</div>';
                                                                } elseif ($row['tingkat'] == '4') {
                                                                  echo '<div class="w-[130px] h-[30px] rounded-md bg-yellow-200 px-1 text-lg font-medium text-yellow-600">Sedang</div>';
                                                                } elseif ($row['tingkat'] == '5') {
                                                                  echo '<div class="w-[130px] h-[30px] rounded-md bg-green-200 px-1 text-lg font-medium text-green-700">Ringan</div>';
                                                                }
                                                                ?></td>
                    <td class="py-2 px-4 border-r"><?= $row['pelanggaran']; ?></td>
                    <td class="py-2 px-4 border-r flex p-2 gap-2 ">
                      <a href="#" onclick="showModalKompen(<?= $row['pengaduan_id']; ?>);" class="bg-yellow-500 hover:bg-yellow-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline"><i class="fas fa-info-circle"></i></a>
                      <?php if($row['status_pengaduan'] ==  'valid') {?>
                      <a href="#" class="bg-green-500 hover:bg-green-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline"><i class="fa-solid fa-check"></i></a>
                    <a href="#" class="bg-blue-500 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline"><i class="fa-solid fa-bell"></i></a>
                      <?php }else if($row['status_pengaduan'] ==  'tidak valid'){?>
                        <a href="#" onclick="showModalKompen(<?= $row['pengaduan_id']; ?>);" class="bg-red-500 hover:bg-red-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded inline"><i class="fas fa-times"></i>
</a>
                      <?php }?>
                    </td>
                    <!-- Tambahkan data lainnya sesuai kebutuhan -->
                  </tr>
                <?php
              endforeach;
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
          <img src="<?= BASEURL; ?>/img/profil/freya.png" alt="" style="border: none; height: 230px !important;">
        </div>
        <div class="containerFormModal w-3/4 ml-3">
          <div class="">
            <div class="flex items-center">
              <div class="w-1/4">
                <p class="block text-sm font-medium text-gray-900">Nama</pl>
              </div>
              <div class="w-2/4 inline-flex items-center">
                <div class="mr-2">: </div>
                <p class="mt 1 p-2 w-full namaLaporan"></p>
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
                <p class="mt 1 p-2 w-full nimLaporan"></p>
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
                <p class="mt 1 p-2 w-full jenkelLaporan"></p>
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
                <p class="mt 1 p-2 w-full noTelpLaporan"></p>
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
                <p class="mt 1 p-2 w-full jurusanLaporan"></p>
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
                <p class="mt 1 p-2 w-full noTelpOrtuLaporan"></p>
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
              <td class="py-2 px-4 border-b tanggalPelanggaran"></td>
              <td class="py-2 px-4 border-b jenisPelanggaran"></td>
              <td class="py-2 px-4 border-b tingktPelanggaran"></td>
              <td class="py-2 px-4 border-b">
                <a href="#" class="text-blue-500 hover:underline downloadBuktiPelanggaran" download="buktipelanggaran">Download</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div>
        <form action="" id="formPelanggaran">
          <input type="hidden" name="pengaduan_id" class="idLaporan">
          <div class="form flex mt-3">
            <div class="block">
              <label for="sanksi">
                <h3 class="font-bold text-base">Sanksi</h3>
              </label>
              <p class="jenisSanksi"></p>

            </div>
            <div class="block ml-5">
              <label for="sanksi">
                <h3 class="font-bold text-base">Catatan</h3>
              </label>
              <textarea name="catatan" class="w-full h-14 p-2 border rounded-md resize-none focus:outline-none focus:border-blue-500 catatanLaporan"></textarea>

            </div>
          </div>
      </div>
      <div class="flex w-full">
        <div class="ml-auto">
          <button id="tolakPelanggaran" type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Tolak
          </button>
          <button id="terimaPelanggaran" type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Simpan
          </button>
          </form>
        </div>
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
      <button id="tutupModal" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-times"></i>
      </button>
      <h3 class="text-2xl mb-7 font-bold text center">Alasan</h3>
    </div>
  </div>
</div>
<script>
  $("#tolakPelanggaran").on("click", function(event) {
    // Mencegah tindakan bawaan tombol
    event.preventDefault();

    // Mengarahkan formulir ke URL tolak
    var url = "<?= BASEURL; ?>/admin/hasilLaporanPelanggaran/tolak";

    // Mengambil data formulir
    var formData = $("#formPelanggaran").serialize();

    // Melakukan permintaan Ajax
    $.ajax({
      type: "POST",
      url: url,
      data: formData,
      success: function(response) {
        Swal.fire({
          title: "Berhasil!",
          text: "Berhasil Menolak Laporan Pelanggaran",
          icon: "success"
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.reload();
          }
        });
      },
      error: function(xhr, status, error) {
        // Handle error jika diperlukan
        console.error(xhr.responseText);
      }
    });
  });

  // Menangani klik tombol "Terima"
  $("#terimaPelanggaran").on("click", function(event) {
    // Mencegah tindakan bawaan tombol
    event.preventDefault();

    // Mengarahkan formulir ke URL terima
    var url = "<?= BASEURL; ?>/admin/hasilLaporanPelanggaran/terima";

    // Mengambil data formulir
    var formData = $("#formPelanggaran").serialize();

    // Melakukan permintaan Ajax
    $.ajax({
      type: "POST",
      url: url,
      data: formData,
      success: function(response) {
        Swal.fire({
          title: "Berhasil!",
          text: "Berhasil Menerima Laporan Pelanggaran",
          icon: "success"
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.reload();
          }
        });
      },
      error: function(xhr, status, error) {
        // Handle error jika diperlukan
        console.error(xhr.responseText);
      }
    });
  });

  const modalKompen1 = document.getElementById('modalTolak');
  const showModalDitolak = () => {
    $('.sidebar').addClass('sidebar-backdrop');
    modalKompen1.classList.remove('hidden');
  }
  const tutupModalKompen1 = document.getElementById('tutupModal');

  tutupModalKompen1.addEventListener('click', function() {
    $('.sidebar').removeClass('sidebar-backdrop');
    modalKompen1.classList.add('hidden');
  });
  const modalKompen = document.getElementById('static-modal-kompen');
  const showModalKompen = (id) => {
    $.ajax({
      url: "<?= BASEURL; ?>/admin/getLaporanPelanggaranById/" + id,
      method: "GET",
      dataType: "json",
      header: 'Content-Type: application/json',
      success: function(data) {
        $('.idLaporan').val(data.pengaduan_id);
        $('.namaLaporan').html(data.nama);
        $('.nimLaporan').html(data.nim);
        $('.jenkelLaporan').html(data.jenis_kelamin);
        $('.noTelpLaporan').html(data.phone_ortu);
        $('.jurusanLaporan').html(data.prodi_nama);
        $('.noTelpOrtuLaporan').html(data.phone_ortu);
        $('.tanggalPelanggaran').html(data.tanggal_pengaduan);
        $('.jenisPelanggaran').html(data.pelanggaran);
        $('.tingktPelanggaran').html(data.tingkat);
        $('.jenisSanksi').html(data.tingkat);
        $('.downloadBuktiPelanggaran').attr('href', '<?= BASEURL; ?>/img/bukti_pengaduan/' + data.bukti_pelanggaran);
        $('.catatanLaporan').html(data.catatan);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
      }
    });
    $('.sidebar').addClass('sidebar-backdrop');
    modalKompen.classList.remove('hidden');
  }
  const tutupModalKompen = document.getElementById('tutupModalKompen');
  const tutupModalKompen2 = document.getElementById('tutupModalKompen2');


  tutupModalKompen.addEventListener('click', function() {
    $('.sidebar').removeClass('sidebar-backdrop');
    modalKompen.classList.add('hidden');
  });
  tutupModalKompen2.addEventListener('click', function() {
    $('.sidebar').removeClass('sidebar-backdrop');
    modalKompen.classList.add('hidden');
  });

  // const showModal = () => {
  //   const modal = document.getElementById('static-modal');
  //   $('.sidebar').addClass('sidebar-backdrop');
  //   modal.classList.remove('hidden');
  // }


  // const buttonTambahDosen = document.getElementById('buttonTambahDosen');
  // const staticModal = document.getElementById('static-modal');
  // const tutupModal = document.getElementById('tutupModal');
  // const tutupModa2 = document.getElementById('tutupModal2');



  // tutupModal.addEventListener('click', function() {
  //   $('.sidebar').removeClass('sidebar-backdrop');
  //   staticModal.classList.add('hidden');
  // });
  // tutupModal2.addEventListener('click', function() {
  //   $('.sidebar').removeClass('sidebar-backdrop');
  //   staticModal.classList.add('hidden');
  // });
  $(document).ready(function() {


    $('#tableLaporan').DataTable({
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