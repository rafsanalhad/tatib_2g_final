
      <!-- Content -->
      <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
        <!-- Dashboard -->
        <div id="dashboard">
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
              <div class="flex-1 notif_db h-10 flex items-center pl-2">Ini adalah data system</div>
              <div class="grid grid-cols-2 gap-4 mt-5">
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="<?= BASEURL; ?>/img/dashboard_icon/dosen.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Dosen</div>
                      <div class="text-xl block"><?php echo $data['dosen']['jumlah_dosen'] ?></div>
                    </div>
                  </div>


                </div>
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="<?= BASEURL; ?>/img/dashboard_icon/jurusan.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Mahasiswa</div>
                      <div class="text-xl block"><?php echo $data['mahasiswa']['jumlah_mahasiswa']?></div>
                    </div>
                  </div>
                </div>
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="<?= BASEURL; ?>/img/dashboard_icon/pelanggaran.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Prodi</div>
                      <div class="text-xl block"><?php echo $data['prodi']['jumlah_prodi']  ?></div>
                    </div>
                  </div>
                </div>
                <div class="bg-white p-4 shadow-lg">
                  <div class="inline-flex">
                    <img src="<?= BASEURL; ?>/img/dashboard_icon/user.png" alt="">
                    <div class="block ml-2">
                      <div class="text-2xl inline">Pelanggaran</div>
                      <div class="text-xl block"><?php echo $data['pelanggaran']['jumlah_pelanggaran']?></div>
                    </div>
                  </div>
                </div>
                <!-- Tambahkan elemen sesuai kebutuhan Anda -->
              </div>

            </div>
            <?php 
              foreach ($data['laporanTerbaru'] as $row):
            ?>
            <div class="flex-1 bg-white pelanggaran_terbaru shadow-lg">
              <h3 class="pelanggaran_tbr_title">Laporan Terbaru</h3>
              <hr class="hr_pelanggaran">
              <hr class="hr_db">
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar"><?php echo $data['laporanTerbaru'][0]['nama']; ?></p>
                  <p class="nim_pelanggar">NIM (<?php echo $data['laporanTerbaru'][0]['nim'] ?>)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <hr class="hr_db">
              </div>
              <div class="biodata_pelanggar">
                <div class="profil_pelanggar flex">
                  <p class="nama_pelanggar">Arya Chandra Kusuma</p>
                  <p class="nim_pelanggar">NIM (2241720040)</p>
                </div>
                <div class="tanggal_pelanggaran_container flex">
                  <p class="tanggal_pelanggaran">16 November 2023</p>
                </div>
                <div class="penyebab_pelanggaran_container flex">
                  <p class="penyebab_pelanggaran">Tidak menjaga kebersihan di seluruh area Polinema - Tingkat III</p>
                  <p class="bobot_cukup_berat">Cukup Berat</p>
                </div>
                <?php
                  endforeach;
                ?>
                <hr class="hr_db">
              </div>
            </div>
            <!-- Tambahkan elemen sesuai kebutuhan Anda -->
          </div>
        </div>
        <!-- end dashboard -->
        <!-- mulai data dosen  -->
        
        <!-- end data dosen  -->
      </div>
