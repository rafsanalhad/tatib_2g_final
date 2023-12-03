<div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
<div id="data_mahasiswa">
  <div class="containerBars_toggled">
    <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
  </div>
  <h1 class="text-2xl font-bold mb-2">Data Mahasiswa</h1>

  <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
    <div class="flex-1 ml-4">Kelola Data Mahasiswa</div>
  </div>
  <hr class="hr_db">
  <div class="flex bg-white">
    <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
      <!-- <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div> -->
      <div class="grid grid-cols-1 gap-4 mt-5">
        <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
          <table id="tableMahasiswa" class="min-w-full border ">
            <!-- Tambahkan header tabel di sini -->
            <thead>
              <tr class="border-b">
                <th class="py-2 px-4 border-r">Nama Mahasiswa</th>
                <th class="py-2 px-4 border-r">NIM</th>
                <th class="py-2 px-4 border-r">TTL</th>
                <th class="py-2 px-4 border-r">Jen. Kelamin</th>
                <th class="py-2 px-4 border-r">No. Telp</th>
                <th class="py-2 px-4 border-r">Alamat</th>
                <th class="py-2 px-4 border-r">Aksi</th>
                <!-- Tambahkan header lainnya sesuai kebutuhan -->
              </tr>
            </thead>
              <tbody>
                <?php foreach ($data['mahasiswa'] as $row) { ?>

                <tr class="border-b">
                  <!-- <div class="flex items-center">
                    
                  </div> -->
                  <td class="py-2 px-4 border-r"> 
                    <?php
                      if ($row['jenis_kelamin'] == 'L') {
                        echo '<img src="' . BASEURL . '/img/profil/rizky_arifiansyah.jpeg" alt="" class="foto_profil_dosen_table inline ">';
                      } else {
                        echo '<img src="' . BASEURL . '/img/profil/profil.png" alt="" class="foto_profil_dosen_table inline ">';
                      }
                    ?>
                    <p class="nama_dosen_table inline"><?= $row['nama']; ?></p>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['nim']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['TTL']; ?></td>
                  <td class="py-2 px-4 border-r">
                    <?php
                      if ($row['jenis_kelamin'] == 'L') {
                        echo '<div class="w-[120px] h-[30px] rounded-full px-1 text-lg font-medium text-blue-800 text-center" style="background-color: #92a9f9;">Laki-Laki</div>';
                      } else {
                        echo '<div class="w-[120px] h-[30px] rounded-full px-1 text-lg font-medium text-rose-600 text-center" style="background-color: #FFB5B5;">Perempuan</div>';
                      }
                    ?>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['phone_ortu']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['alamat']; ?></td>
                  <td class="py-2 px-4 border-r">
                    <a href="#" onclick="showModal();" class="bg-yellow-500 hover:bg-yellow-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
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

    <!-- Tambahkan elemen sesuai kebutuhan Anda -->
  </div>
</div>
</div>
<div id="static-modal" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
  <!-- Backdrop -->
  <div class="fixed inset-0 bg-black opacity-50 ">

  </div>

  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white w-full max-w-3xl p-8 rounded-lg shadow-md relative">
      <!-- Tombol untuk menutup modal -->
      <button id="tutupModal" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-times"></i>
      </button>

      <!-- Konten Modal -->
      <!-- <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1> -->
      <h3 class="text-2xl mb-7 font-bold">Tambah Data Mahasiswa</h3>
      <div class="flex flex-col md:flex-row">
        <div class="containerGroupImg md:w-1/4">
          <img src="<?= BASEURL;?>/img/icon/Group.png" alt="" style="padding: 50px;">
        </div>
        <div class="containerFormModal md:w-3/4 ml-3">
          <form class="mb-3">
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="nama" id="nama" class="block text-sm font-medium text-gray-900">Nama</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="name" id="nama" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="nim" id="nim" class="block text-sm font-medium text-gray-900">NIM</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="nim" id="nim" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="ttl" id="ttl" class="block text-sm font-medium text-gray-900">TTL</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="ttl" id="ttl" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="jenkel" id="jenkel" class="block text-sm font-medium text-gray-900">Jenis Kelamin
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <select name="pl-2 jenisPelanggaran" id="jenisPelanggaran" class="mt-1 p-2 w-full border rounded-md">  
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                    <option value="L" selected>Pilih Jenis Kelamin Anda</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="notelp" class="block text-sm font-medium text-gray-900">No Telp</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="notelp" id="notelp" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="jurusan" class="block text-sm font-medium text-gray-900">Jurusan</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="jurusan" id="jurusan" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="notelp_ortu" class="block text-sm font-medium text-gray-900">No Telp Ortu</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="notelp_ortu" id="notelp_ortu" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="flex w-full">
        <div class="ml-auto">
          <button id="tutupModal2" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Tutup
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
  const showModal = () => {
    const modal = document.getElementById('static-modal');
    $('.sidebar').addClass('sidebar-backdrop');
    modal.classList.remove('hidden');
  }
  // const modalKompen = document.getElementById('static-modal-kompen');
  //   const showModalKompen = () => {
  //     $('.sidebar').addClass('sidebar-backdrop');
  //     modalKompen.classList.remove('hidden');
  //   }
    // const tutupModalKompen = document.getElementById('tutupModalKompen');
    // const tutupModalKompen2 = document.getElementById('tutupModalKompen2');


    // tutupModalKompen.addEventListener('click', function() {
    //   $('.sidebar').removeClass('sidebar-backdrop');
    //   modalKompen.classList.add('hidden');
    // });
    // tutupModalKompen2.addEventListener('click', function() {
    //   $('.sidebar').removeClass('sidebar-backdrop');
    //   modalKompen.classList.add('hidden');
    // });

    const buttonTambahDosen = document.getElementById('buttonTambahDosen');
    const staticModal = document.getElementById('static-modal');
    const tutupModal = document.getElementById('tutupModal');
    const tutupModa2 = document.getElementById('tutupModal2');



    tutupModal.addEventListener('click', function() {
      $('.sidebar').removeClass('sidebar-backdrop');
      staticModal.classList.add('hidden');
    });
    tutupModa2.addEventListener('click', function() {
      $('.sidebar').removeClass('sidebar-backdrop');
      staticModal.classList.add('hidden');
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
    $('#tableMahasiswa_filter').append('<div id="buttonTambahDosen"><a href="#" onclick="showModal();" class="bg-green-500 hover:bg-green-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus"></i> Tombol Link</a></div>');
  });
</script>