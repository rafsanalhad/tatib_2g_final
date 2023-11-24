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

      <div class="flex flex-col md:flex-row">
        <div class="containerGroupImg md:w-1/4">
          <img src="assets/icon/Group.png" alt="" style="padding: 50px;">
        </div>
        <div class="containerFormModal md:w-3/4 ml-3">
          <form class="mb-3">
            <div class="mb-4 mt-8">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" class="block text-sm font-medium text-gray-900">Nama Produk</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" class="block text-sm font-medium text-gray-900">Nama Produk</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" class="block text-sm font-medium text-gray-900">Nama Produk</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" class="block text-sm font-medium text-gray-900">Nama Produk</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
            <div class="mb-4">
              <div class="flex items-center">
                <div class="w-2/4">
                  <label for="name" class="block text-sm font-medium text-gray-900">Nama Produk</label>
                </div>
                <div class="w-3/4 inline-flex items-center">
                  <div class="mr-2">: </div>
                  <input type="text" name="name" id="name" class="mt-1 p-2 w-full border rounded-md">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="flex w-full">
        <div class="ml-auto">
          <button id="tutupModal2" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Tutup Modal
          </button>
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah Produk
          </button>
        </div>
      </div>
    </div>
  </div>
</div>