<!-- Content -->
<div class="flex-1 pl-8 pb-8 pt-6 pr-8 shadow-sm main_content text-center ">
    <div class="containerBars_toggled">
        <i class="fa-solid fa-bars icon_bars toggle_bars toggle_bars_toggled"></i>
    </div>
    <h1 class="text-4xl font-bold mb-5">Upload Bukti Kompen</h1>
    <div class="flex-col bg-white items-center shadow-lg subtitle_dashboard text-center mx-80 shadow-neutral-800">
        <div class="flex-1 bg-white mt-3">
        <label for="downloadTemplate" class="font-bold">Klik Gambar Untuk Download Template</label>
        <div class="flex justify-center">
            <a href="<?= BASEURL; ?>/doc/templateKompen.docx" download="templateKompen.docx">
            <img src="<?= BASEURL; ?>/img/icon/logoTemplate.png" alt="template kompen" class="templateKompen h-[200px] w-[300px] mt-5">
            </a>
        </div>
        <br>
        <label for="fotoPengaduan" class="font-bold">Upload Bukti Kompen:</label>
        <br>
        <input class="pl-2 w-[250px] h-[40px] mt-1" type="file" name="buktiKompen" id="buktiKompen" class="mt-5">
        <br>
        <button type="submit" class="w-[170px] h-[50px] items-center bg-sky-600 rounded-3xl text-white text-2xl font-normal font-['Inter'] mt-5 mb-5 hover:bg-sky-700">Simpan</button>  
    </div>