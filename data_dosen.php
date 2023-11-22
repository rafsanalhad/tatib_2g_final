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
      <div class="grid grid-cols-1 gap-4 mt-5">
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
            <?php
            include "koneksi.php";
            $query = "SELECT * FROM dosen";
            $result = mysqli_query($koneksi, $query);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tbody>
                <!-- Tambahkan baris-baris data di sini -->
                <tr class="border-b">
                  <td class="py-2 px-4 border-r"> <img src="assets/profil/profil.png" alt="" class="foto_profil_dosen_table inline ">
                    <p class="nama_dosen_table inline"><?= $row['nama']; ?></p>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['nip']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['TTL']; ?></td>
                  <td class="py-2 px-4 border-r">
                    <div class="containerJenkel"><?php
                                                  if ($row['jenis_kelamin'] == 'L') {
                                                    echo 'Laki-laki';
                                                  } else {
                                                    echo 'Perempuan';
                                                  }
                                                  ?></div>
                  </td>
                  <td class="py-2 px-4 border-r"><?= $row['no_phone']; ?></td>
                  <td class="py-2 px-4 border-r"><?= $row['alamat']; ?></td>
                  <td class="py-2 px-4 border-r">
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

    <!-- Tambahkan elemen sesuai kebutuhan Anda -->
  </div>
</div>


<div id="static-modal" class="fixed inset-0 hidden overflow-y-auto overflow-x-hidden z-50">
  <!-- Backdrop -->
  <div class="fixed inset-0 bg-black opacity-50 ">

  </div>

  <div class="flex items-center justify-center min-h-screen p-4">
    <div class="bg-white w-full max-w-md p-8 rounded-lg shadow-md relative">
      <!-- Tombol untuk menutup modal -->
      <button id="tutupModal" class="absolute top-4 right-4 bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        <i class="fa-solid fa-times"></i>
      </button>

      <!-- Konten Modal -->
      <h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
      <form class="mb-6">
        <div class="mb-4">
          <label for="name" class="block text-sm font-medium text-gray-900">Nama Produk</label>
          <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
          <label for="price" class="block text-sm font-medium text-gray-900">Harga</label>
          <input type="number" name="price" id="price" class="mt-1 p-2 w-full border rounded-md">
        </div>
        <div class="mb-4">
          <label for="category" class="block text-sm font-medium text-gray-900">Kategori</label>
          <select id="category" class="mt-1 p-2 w-full border rounded-md">
            <option value="TV">TV/Monitors</option>
            <option value="PC">PC</option>
            <option value="GA">Gaming/Console</option>
            <option value="PH">Phones</option>
          </select>
        </div>
        <div class="mb-4">
          <label for="description" class="block text-sm font-medium text-gray-900">Deskripsi Produk</label>
          <textarea id="description" rows="4" class="mt-1 p-2 w-full border rounded-md"></textarea>
        </div>
      </form>

      <!-- Tombol untuk menutup modal -->
      <button id="tutupModal2" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
        Tutup Modal
      </button>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        Tambah Produk
      </button>
    </div>
  </div>
</div>
<script>
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
    $('#tableDosen_filter').append('<div id="buttonTambahDosen"><a data-modal-target="static-modal" onclick="showModal();"data-modal-toggle="static-modal" href="#" class="bg-blue-500 hover:bg-blue-700 sm:right-[-100px] text-white font-bold py-2 px-4 rounded"><i class="fa-solid fa-plus"></i> Tombol Link</a></div>');
  });
</script>
<script>
  // Dapatkan elemen tombol dan modal
  const showModal = () => {
    const modal = document.getElementById('static-modal');
    $('.sidebar').addClass('sidebar-backdrop');
    modal.classList.remove('hidden');
  }


  const buttonTambahDosen = document.getElementById('buttonTambahDosen');
  const staticModal = document.getElementById('static-modal');
  const tutupModal = document.getElementById('tutupModal');
  const tutupModa2 = document.getElementById('tutupModal2');



  tutupModal.addEventListener('click', function() {
    $('.sidebar').removeClass('sidebar-backdrop');
    staticModal.classList.add('hidden');
  });
  tutupModal2.addEventListener('click', function() {
    $('.sidebar').removeClass('sidebar-backdrop');
    staticModal.classList.add('hidden');
  });
</script>