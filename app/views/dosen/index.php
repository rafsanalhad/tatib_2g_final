
    <!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-2xl font-bold mb-2">Dashboard Dosen</h1>
      <div class="flex bg-white h-10 items-center shadow-sm subtitle_dashboard">
        <div class="flex-1 ml-4">Ringkasan System</div>
      </div>
      <hr class="hr_db">
      <div class="flex bg-white flex-col xl:flex-row">
        <div class="flex-1 bg-white p-4"> <!-- Tambahkan "flex" class di sini -->
          <div class="flex-1 notif_db h-10 flex items-center pl-2">
          <p><b>Info! </b>Berikut adalah Biodata diri anda</p>
          </div>
          <table class="items-center w-full  mt-3">
          <?php
              // include "koneksi.php";
              // $nip = $_SESSION['username'];
              // $query = "SELECT * FROM dosen where nip='$nip'";
              // $result = mysqli_query($koneksi, $query);          
              // while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tbody>
              <tr>
                <td rowspan="10"><img src="<?= BASEURL; ?>/img/profil/mhs1.png" class="m-auto" alt="profil"></td>
              </tr>
              <tr>
                <td>Nama</td>
                <td><?//= $row['nama'];  ?>Tes</td>
              </tr>
              <tr>
                <td>NIP</td>
                <td><?//= $row['nip'];  ?>Tes</td>
              </tr>
              <tr>
                <td>TTL</td>
                <td><?//= $row['TTL'];  ?>Tes</td>
              </tr>
              <tr>
                <td>Jen. Kelamin</td>
                <td>Tes<?php 
                // if ($row['jenis_kelamin'] == 'L') {
                //     echo 'Laki-laki';
                //   }else{
                //     echo 'Perempuan';
                //   }  
                  
                  ?> </td>
              </tr>
              <tr>
                <td>Pendidikan</td>
                <td><?//= $row['pendidikan'];  ?>Texdfajlafdadfa</td>
              </tr>
              <tr>
                <td>Jabatan</td>
                <td><?//= $row['jabatan'];  ?>Tex</td>
              </tr>
              <tr>
                <td>Email</td>
                <td><?//= $row['email'];  ?>Tex</td>
              </tr>
              <tr>
                <td>Phone</td>
                <td><?//= $row['no_phone'];  ?>Tex</td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td><?//= $row['alamat'];  ?>Tex</td>
              </tr>   
              <?php
              // }
              ?>
            </tbody>
          </table>
          <div class="text-center mt-10">
            <a href="<?= BASEURL;?>/dosen/formPengaduan" class="text-white text-lg font-sans text-center"><button class="w-[180px] h-[50px] bg-sky-600 hover:bg-sky-700 rounded-xl">
            Ajukan Pengaduan</button></a>
          </div>
        </div>
        <div class="flex-1 bg-white jumlah_pelanggaran shadow-lg">
          <h3 class="pelanggaran_tbr_title">Jumlah Pengaduan</h3>
          <hr class="hr_db">
          <div class="flex-col">
          <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-red-700 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">I</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 1</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-orange-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">II</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 2</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-yellow-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">III</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 3</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-yellow-200 rounded-lg grid justify-center items-center text-yellow-600"><p class="text-lg font-bold">IV</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 4</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-green-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">V</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pengaduan Tingkat 5</p>
                <p class="font-bold">2</p>
              </div>
            </div>
          </div>
          </div>
      </div>