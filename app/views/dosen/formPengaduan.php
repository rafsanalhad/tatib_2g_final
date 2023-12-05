<!-- Content -->
    <div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content">
      <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
      </div>
      <h1 class="text-4xl font-bold mb-5 text-center">Ajukan Pengaduan</h1>
      <div class="flex-col bg-white shadow-lg subtitle_dashboard mx-80 text-center shadow-neutral-800">
        <div class=" flex-1 bg-white mt-3">
          <label for="nimPengaduan">NIM:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-1" type="text" name="nimPengaduan" id="nimPengaduan">
          <br>
          <br>
          <label for="namaMhsPengaduan">Nama Mahasiswa:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-1" type="text" name="namaMhsPengaduan" id="namaMhsPengaduan">
          <br>
          <br>
          <label for="noHpMhsPengaduan">Nomor Hp Mahasiswa:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-1" type="text" name="noHpMhsPengaduan" id="noHpMhsPengaduan">
          <br>
          <br>
          <label for="jenisPelanggaran">Jenis Pelanggaran:</label>
          <br>
          <select name="jenisPelanggaran" id="jenisPelanggaran" class="border border-neutral-400 w-[250px] h-[40px] rounded-lg">
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
          <br><br>
          <label for="prodi">Prodi:</label>
          <br>
          <select name="jenisPelanggaran" id="jenisPelanggaran" class="border border-neutral-400 w-[250px] h-[40px] rounded-lg">
            <option value="prodiTI">Teknik Informatika</option>
            <option value="prodiSIB">Sistem Informasi Bisnis</option>
          </select>
          <br>
          <br>
          <label for="fotoPengaduan">Upload Foto:</label>
          <br>
          <input class="pl-2 w-[250px] h-[40px] mt-1" type="file" name="fotoPengaduan" id="fotoPengaduan">
          <br>
          <br>
          <label for="tglPengaduan">Tanggal Pengaduan:</label>
          <br>
          <input class="pl-2 mt-1 border border-neutral-400 w-[250px] h-[40px] rounded-lg " type="date" name="tglPengaduan" id="tglPengaduan" value="<?php echo date('Y-m-d'); ?>" required>
          <br>
          <input type="submit" class="w-[130px] h-[40px] items-center align-center bg-sky-600 rounded-3xl text-white text-2xl font-normal font-['Inter'] mt-3 mb-3 text-center hover:bg-sky-700" value="Simpan"/>
    </div>
    </div>