<!-- Content -->
<div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
  <div class="containerBars_toggled">
    <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
  </div>
  <h1 class="text-2xl font-bold mb-2">Dashboard Mahasiswa</h1>
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
        <tbody>
          <tr>
            <td rowspan="10"><img class="w-40 h-60" src="<?= BASEURL; ?>/img/profil/<?= $data['biodata']['mahasiswa_img']?>" class="m-auto" alt="profil"></td>
          </tr>
          <tr>
            <td>Nama</td>
            <td><?= $data['biodata']['nama'];?></td>
          </tr>
          <tr>
            <td>NIM</td>
            <td><?= $data['biodata']['nim'];?></td>
          </tr>
          <tr>
            <td>TTL</td>
            <td><?= $data['biodata']['TTL'];  ?></td>
          </tr>
          <tr>
            <td>Jen. Kelamin</td>
            <td><?php
                if ($data['biodata']['jenis_kelamin'] == 'L') {
                    echo 'Laki-laki';
                }else{
                  echo 'Perempuan';
                }  
                ?>
            </td>
          </tr>
          <tr>
            <td>Prodi</td>
            <td><?= $data['biodata']['prodi_nama'];?></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td><?= $data['biodata']['alamat'];  ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?= $data['biodata']['email'];?></td>
          </tr>
          <tr>
            <td>Phone</td>
            <td><?= $data['biodata']['phone_ortu'];  ?></td>
          </tr>
          <tr>
            <td>Phone Ortu</td>
            <td><?= $data['biodata']['no_phone'];?></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center mt-10">
          </div>
        </div>
        <div class="flex-1 bg-white jumlah_pelanggaran shadow-lg">
        <h3 class="pelanggaran_tbr_title">Jumlah Pelanggaran</h3>
        <?php
        // Menghitung jumlah pengaduan yang keluar
          $tingkat = [0,0,0,0,0];
          // foreach ($data['tingkat'] as $dt) {
          //   $tingkat[$dt['tingkat1']] = $dt['tingkat1'];
          // }
          for ($i = 0; $i < count($data['tingkat'])-2; $i++){
            $tingkat[$i] = $data['tingkat']['tingkat'.($i+1)];
            if ($tingkat[$i] != 3 || $i == 0){
              continue;
            }else{
              $tingkat[$i-1] += 1;
              $tingkat[$i] = 0; 
            }
          }
        ?>
        <hr class="hr_db">
        <div class="flex gap-3">
            <div class="flex-col p-3">
                <div class="flex w-60 h-16 bg-white shadow-lg p-4 mb-1">
                    <div class="flex-none">
                        <div class="w-16 h-10 bg-red-700 rounded-lg grid justify-center items-center text-white">
                            <p class="text-lg font-bold">I</p>
                        </div>
                    </div>                                        
                    <div class="flex-auto ml-2">
                        <p class="text-xs">Pelanggaran Tingkat 1</p>
                        <p class="font-bold"><?= $tingkat[0];?></p>
                    </div>
                </div>
                <div class="flex w-60 h-16 bg-white shadow-lg p-4 mb-1">
                    <div class="flex-none">
                        <div class="w-16 h-10 bg-orange-500 rounded-lg grid justify-center items-center text-white">
                            <p class="text-lg font-bold">II</p>
                        </div>
                    </div>
                    <div class="flex-auto ml-2">
                        <p class="text-xs">Pelanggaran Tingkat 2</p>
                        <p class="font-bold"><?= $tingkat[1];?></p>
                    </div>
                </div>
                <div class="flex w-60 h-16 bg-white shadow-lg p-4 mb-1">
                    <div class="flex-none">
                        <div class="w-16 h-10 bg-yellow-500 rounded-lg grid justify-center items-center text-white">
                            <p class="text-lg font-bold">III</p>
                        </div>
                    </div>
                    <div class="flex-auto ml-2">
                        <p class="text-xs">Pelanggaran Tingkat 3</p>
                        <p class="font-bold"><?= $tingkat[2]?></p>
                    </div>
                </div>
                <div class="flex w-60 h-16 bg-white shadow-lg p-4 mb-1">
                    <div class="flex-none">
                        <div
                            class="w-16 h-10 bg-yellow-200 rounded-lg grid justify-center items-center text-yellow-600">
                            <p class="text-lg font-bold">IV</p>
                        </div>
                    </div>
                    <div class="flex-auto ml-2">
                        <p class="text-xs">Pelanggaran Tingkat 4</p>
                        <p class="font-bold"><?= $tingkat[3];?></p>
                    </div>
                </div>
                <div class="flex w-60 h-16 bg-white shadow-lg p-4 mb-1">
                    <div class="flex-none">
                        <div class="w-16 h-10 bg-green-500 rounded-lg grid justify-center items-center text-white">
                            <p class="text-lg font-bold">V</p>
                        </div>
                    </div>
                    <div class="flex-auto ml-2">
                        <p class="text-xs">Pelanggaran Tingkat 5</p>
                        <p class="font-bold"><?= $tingkat[4];?></p>
                    </div>
                </div>
            </div>
            <div class="gap-3 flex flex-col p-3">
              <h1 class="font-['Inter'] text-sm text-gray-800">Keterangan warna :</h1>
                <div class="flex w-25 h-7 bg-rose-100 rounded-lg items-center border border-red-700">
                <div class="w-2 h-2 my-2 ml-2 bg-red-600 rounded-full"></div>
                <p class="text-red-700 text-xs pl-2">Sangat Berat</p>
              </div>
              <div class="flex w-25 h-7 bg-orange-100 rounded-lg items-center border border-orange-500">
                <div class="w-2 h-2 my-2 ml-2 bg-orange-500 rounded-full"></div>
                <p class="text-orange-800 text-xs pl-2">Cukup Berat</p>
              </div>
              <div class="flex w-25 h-7 bg-yellow-100 rounded-lg items-center border border-yellow-500">
                <div class="w-2 h-2 my-2 ml-2 bg-yellow-500 rounded-full"></div>
                <p class="text-yellow-800 text-xs pl-2">Berat</p>
              </div>
              <div class="flex w-25 h-7 bg-yellow-50 rounded-lg items-center border border-yellow-200">
                <div class="w-2 h-2 my-2 ml-2 bg-yellow-200 rounded-full"></div>
                <p class="text-yellow-700 text-xs pl-2">Sedang</p>
              </div>
              <div class="flex w-25 h-7 bg-green-100 rounded-lg items-center border border-green-500">
                <div class="w-2 h-2 my-2 ml-2 bg-green-500 rounded-full"></div>
                <p class="text-green-500 text-xs pl-2">Ringan</p>
              </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $('#dashboard_mahasiswa').addClass('bg-blue-400');
    </script>