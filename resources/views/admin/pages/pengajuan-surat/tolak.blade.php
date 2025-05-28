<div id="user-tolak-modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
    <div class="sm:max-w-md sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
        <form id="tolak-form" method="POST" action="">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="tolak-id">

            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                    Tolak Pengajuan Surat
                </h3>
                <button class="inline-flex justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>

            <div class="p-4 space-y-3 text-sm">
                <p>
                    <strong>Nama Pemohon:</strong> <span id="tolak-nama"></span>
                </p>
                <p>Silakan masukkan alasan penolakan di bawah ini:</p>
                <textarea name="catatan_admin" rows="4" class="form-input w-full" required placeholder="Contoh: Dokumen tidak lengkap, data tidak valid, dll"></textarea>
            </div>

            <div class="flex justify-end gap-2 p-4 border-t dark:border-gray-700">
                <button type="button" class="btn bg-light text-gray-800" data-fc-dismiss>Batal</button>
                <button type="submit" class="btn bg-danger text-white">Tolak Pengajuan</button>
            </div>
        </form>
    </div>
</div>
