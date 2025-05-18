<div id="user-import-modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
    <div class="sm:max-w-md sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
        <form id="import-form" method="POST" action="{{ route('admin.kartu-keluarga.import-excel') }}" enctype="multipart/form-data">
            @csrf

            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                    Hapus Kartu Keluarga
                </h3>
                <button class="inline-flex justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>

            <div class="p-4 space-y-4 text-sm">
                <div class="mb-3">
                    <p class="text-sm text-gray-600">  
                        <a href="{{ route('admin.kartu-keluarga.template-excel') }}" 
                        class="text-primary font-medium underline hover:text-primary/80">
                            Download template Excel di sini
                        </a>
                    </p>
                </div>

                <div class="mb-3">
                    <label class="mb-2" for="file_excel_kartu_keluarga">Upload File</label>
                    <input type="file" name="file_excel_kartu_keluarga" id="file_excel_kartu_keluarga" class="form-input border">
                </div>
            </div>

            <div class="flex justify-end gap-2 p-4 border-t dark:border-gray-700">
                <button type="button" class="btn bg-light text-gray-800" data-fc-dismiss>Tutup</button>
                <button type="submit" class="btn bg-primary text-white">Import</button>
            </div>
        </form>
    </div>
</div>
