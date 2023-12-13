<!-- Content -->
<div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content text-center ">
    <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
    </div>
    <h1 class="text-4xl font-bold mb-5">Upload Bukti Sanksi</h1>
    <form action="<?= BASEURL; ?>/Mahasiswa/updateKompen" method="post" enctype="multipart/form-data">
        <div class="flex-col bg-white items-center shadow-lg subtitle_dashboard text-center mx-80 shadow-neutral-800">
            <label for="fotoPengaduan" class="font-bold">Pilih Dokumen :</label>
            <br>
            <input class="w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-3 pl-2" type="hidden" name="id" id="id" value="<?= $data; ?>">
            <input class="w-[250px] h-[40px] border border-neutral-400 rounded-lg mt-3 pl-2" type="hidden" name="aksi" id="aksi" value="upload">
            <input class="pl-2 w-[250px] h-[40px] mt-1" type="file" name="buktiKompen" id="buktiKompen" class="mt-5">
            <br>
            <button type="submit" class="w-[170px] h-[50px] items-center bg-sky-600 rounded-3xl text-white text-2xl font-normal font-['Inter'] mt-5 mb-5 hover:bg-sky-700">Simpan</button>  
        </div>
    </form>
    </div>