

    <!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-2xl font-bold mb-2">Dashboard</h1>
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
              // $nim = $_SESSION['username'];
              // $query = "SELECT * FROM mahasiswa where nim='$nim'";
              // $result = mysqli_query($koneksi, $query);          
              // while ($row = mysqli_fetch_assoc($result)){
            ?>
            <tbody>
              <tr>
                <td class="border-2 border-slate-700" rowspan="10"><img src="<?= BASEURL; ?>/img/profil/mhs1.png" class="m-auto" alt="profil"></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Nama</td>
                <td class="border-2 border-slate-700"><?//= $row['nama'];  ?></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">NIM</td>
                <td class="border-2 border-slate-700"><?//= $row['nim'];  ?></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">TTL</td>
                <td class="border-2 border-slate-700"><?//= $row['TTL'];  ?></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Jen. Kelamin</td>
                <td class="border-2 border-slate-700"><?php 
                // if ($row['jenis_kelamin'] == 'L') {
                //     echo 'Laki-laki';
                //   }else{
                //     echo 'Perempuan';
                //   }  
                  ?> 
                  </td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Jurusan</td>
                <td class="border-2 border-slate-700"><?//= $row['jurusan'];  ?></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Alamat</td>
                <td class="border-2 border-slate-700"><?//= $row['alamat'];  ?></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Email</td>
                <td class="border-2 border-slate-700"><?//= $row['email'];  ?></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Phone</td>
                <td class="border-2 border-slate-700"><?//= $row['phone_ortu'];  ?></td>
              </tr>
              <tr>
                <td class="border-2 border-slate-700">Phone Ortu</td>
                <td class="border-2 border-slate-700"><?//  = $row['phone_ortu'];  ?></td>
              </tr>
              <?php
              // }
              ?>
            </tbody>
          </table>
          <div class="text-center mt-10">
            <a href="<?= BASEURL;?>/mahasiswa/uploadBuktiKompen.php" class="text-white text-lg font-sans text-center"><button class="w-[180px] h-[50px] bg-sky-600 hover:bg-sky-700 rounded-xl">
            Upload Bukti Kompen</button></a>
          </div>
        </div>
        <div class="flex-1 bg-white jumlah_pelanggaran shadow-lg">
          <h3 class="pelanggaran_tbr_title">Jumlah Pelanggaran</h3>
          <hr class="hr_db">
          <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-red-700 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">I</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pelanggaran Tingkat 1</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-orange-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">II</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pelanggaran Tingkat 2</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-yellow-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">III</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pelanggaran Tingkat 3</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-yellow-200 rounded-lg grid justify-center items-center text-yellow-600"><p class="text-lg font-bold">IV</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pelanggaran Tingkat 4</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="flex w-60 h-16 bg-white shadow-lg ml-3 p-4 mb-1">
              <div class="flex-none">
                <div class="w-16 h-10 bg-green-500 rounded-lg grid justify-center items-center text-white"><p class="text-lg font-bold">V</p></div>
              </div>
              <div class="flex-auto ml-2">
                <p class="text-xs">Pelanggaran Tingkat 5</p>
                <p class="font-bold">2</p>
              </div>
            </div>
            <div class="bg-red-700 w-[30px] h-[30] rounded-full flex">
              Sangat Berat
            </div>
        </div>
    </div>