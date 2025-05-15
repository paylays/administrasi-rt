<div id="user-detail-modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
    <div class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
        <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
            <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                Detail Akun Warga
            </h3>
            <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>
        <div class="p-4 overflow-y-auto text-sm space-y-3">
            <p><strong>NIK:</strong> <span class="{{ is_null($item->nik) ? 'text-danger' : 'text-gray-700 dark:text-gray-200' }}" id="detail-nik"></span></p>
            <p><strong>Nama:</strong> <span id="detail-name"></span></p>
            <p><strong>Email:</strong> <span id="detail-email"></span></p>
            <p><strong>Tanggal Dibuat:</strong> <span id="detail-created"></span></p>
            <p><strong>Tanggal Diubah:</strong> <span id="detail-updated"></span></p>
        </div>
        <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
            <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss type="button">Tutup</button>
        </div>
    </div>
</div>