<div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
  <div id="data_dosen">
    <div class="containerBars_toggled">
      <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
    </div>
    <h1 class="text-2xl font-bold mb-2">Data Dosen</h1>

    <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
      <div class="flex-1 ml-4">Kelola Data Dosen</div>
    </div>
    <hr class="hr_db">
    <div class="flex bg-white">
      <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
        <!-- <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div> -->
        <div class="grid grid-cols-1 gap-4">
          <div class="container mx-auto mt-8 containerTableDosen overflow-x-auto">
            <table id="tableDosen" class="min-w-full border ">
              <!-- Tambahkan header tabel di sini -->
              <thead>
                <tr class="border-b">
                  <th class="py-2 px-4 border-r">Nama Dosen</th>
                  <th class="py-2 px-4 border-r">NIP</th>
                  <th class="py-2 px-4 border-r">TTL</th>
                  <th class="py-2 px-4 border-r">Jen. Kelamin</th>
                  <th class="py-2 px-4 border-r">No. Telp</th>
                  <th class="py-2 px-4 border-r">Alamat</th>
                  <th class="py-2 px-4 border-r">Aksi</th>
                  <!-- Tambahkan header lainnya sesuai kebutuhan -->
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['dosen'] as $row) { ?>
                  <!-- Tambahkan baris-baris data di sini -->
                  <tr class="border-b">
                    <td class="py-2 px-4 border-r">
                      <div class="flex items-center">
                        <?php
                          if ($row['jenis_kelamin'] == 'L') {
                            echo '<img src="' . BASEURL . '/img/profil/rizky_arifiansyah.jpeg" alt="" class="foto_profil_dosen_table inline ">';
                          } else {
                            echo '<img src="' . BASEURL . '/img/profil/profil.png" alt="" class="foto_profil_dosen_table inline ">';
                          }
                        ?>
                        <!-- <img src="<?= BASEURL; ?>/img/profil/profil.png" alt="" class="foto_profil_dosen_table inline "> -->
                        <p class="nama_dosen_table inline"><?= $row['nama']; ?></p>
                      </div>
                    </td>
                    <td class="py-2 px-4 border-r"><?= $row['nip']; ?></td>
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
                    <td class="py-2 px-4 border-r"><?= $row['no_phone']; ?></td>
                    <td class="py-2 px-4 border-r"><?= $row['alamat']; ?></td>
                    <td class="py-2 px-4 border-r">
                      <div class="inline`">
                        <a href="#" onclick="showModal();" class="bg-yellow-500 hover:bg-yellow-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="bg-red-500 hover:bg-red-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-trash"></i></a>
                      </div>
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

<? //php include 'modalTambahEdit.php' 
?>
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
      <h3 class="text-2xl mb-7 font-bold">Tambah Data Dosen</h3>
      <div class="flex flex-col md:flex-row">
        <div class="containerGroupImg md:w-2/6">
          <img src="<?= BASEURL;?>/img/icon/Group.png" alt="" style="padding: 50px;">
        </div>
        <div class="containerFormModal md:w-4/6 ml-3">
          <form class="mb-3" action="<?= BASEURL;?>/Admin/tambahDosen" method="POST">
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="nama" id="nama" class="block text-sm font-medium text-gray-900">Nama</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="nama" id="nama" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="nip" id="nip" class="block text-sm font-medium text-gray-900">NIP</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="nip" id="nip" class="mt-1 p-2 w-full border rounded-md">
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
                  <select name="jenkel" id="jenisPelanggaran" class="mt-1 p-2 w-full border rounded-md">  
                    <option name="jenkel" value="L">Laki-laki</option>
                    <option name="jenkel" value="P">Perempuan</option>
                    <option value="L" selected>Pilih Jenis Kelamin Anda</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="jabatan" class="block text-sm font-medium text-gray-900">Jabatan</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="jabatan" id="jabatan" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="email" class="block text-sm font-medium text-gray-900">email</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="email" name="email" id="email" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="no_phone" class="block text-sm font-medium text-gray-900">No Telp</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="no_phone" id="no_phone" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-2">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" id="alamat" class="block text-sm font-medium text-gray-900">Alamat</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <textarea name="alamat" id="alamat" class="mt-1 p-2 w-full border rounded-md"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="flex w-full">
          <div class="ml-auto">
            <button type="button" id="tutupModal2" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
            Tutup
            </button>
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
              Simpan
            </button>
            </div>
          </form>
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

    $('#tableDosen').DataTable({
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
    $('#tableDosen_filter').append('<div id="buttonTambahDosen"><a onclick="showModal();"data-modal-toggle="static-modal" href="#" class="bg-green-500 hover:bg-green-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus"></i> Tombol Link</a></div>');
   
  });
</script>