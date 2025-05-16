<div id="user-delete-modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
    <div class="sm:max-w-md sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
        <form id="delete-form" method="POST" action="">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" id="delete-id">

            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                    Hapus Kartu Keluarga
                </h3>
                <button class="inline-flex justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>

            <div class="p-4 space-y-2 text-sm">
                <p>
                    <strong>No.KK:</strong> <span id="delete-no_kk" class="uppercase"></span>
                </p>
                <p>
                    <strong>Nama Kepala Keluarga:</strong> <span id="delete-nama_kepala_keluarga" class="uppercase"></span>
                </p>
                <p>Apakah Anda yakin ingin menghapus kartu keluarga tersebut tersebut?</p>
            </div>

            <div class="flex justify-end gap-2 p-4 border-t dark:border-gray-700">
                <button type="button" class="btn bg-light text-gray-800" data-fc-dismiss>Batal</button>
                <button type="submit" class="btn bg-danger text-white">Hapus</button>
            </div>
        </form>
    </div>
</div>
