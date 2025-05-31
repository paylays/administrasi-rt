<div id="user-delete-modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
    <div class="sm:max-w-md sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
        <form id="delete-form" method="POST" action="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" id="delete-id">

            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                    Hapus Pengajuan Surat
                </h3>
                <button class="inline-flex justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>

            <div class="p-4 space-y-2 text-sm text-gray-700 dark:text-gray-300">
                <p>Apakah Anda yakin ingin menghapus pengajuan surat berikut?</p>
                <p><strong>ID Pengajuan:</strong> <span id="delete-pengajuan_id"></span></p>
                <p><strong>NIK Warga:</strong> <span id="delete-nik"></span></p>
                <p><strong>Email Warga:</strong> <span id="delete-email"></span></p>
                <p><strong>Nama Warga:</strong> <span id="delete-name"></span></p>
                <p><strong>NIK Pemohon:</strong> <span id="delete-nik_pemohon"></span></p>
                <p><strong>Nama Pemohon:</strong> <span id="delete-nama_pemohon"></span></p>
            </div>

            <div class="flex justify-end gap-2 p-4 border-t dark:border-gray-700">
                <button type="button" class="btn bg-light text-gray-800" data-fc-dismiss>Batal</button>
                <button type="submit" class="btn bg-danger text-white">Hapus</button>
            </div>
        </form>
    </div>
</div>
