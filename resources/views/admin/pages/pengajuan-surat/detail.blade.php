<div id="user-detail-modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
    <div class="-translate-y-5 fc-modal-open:translate-y-0 fc-modal-open:opacity-100 opacity-0 duration-300 ease-in-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
        <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
            <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                Detail Pengajuan Surat
            </h3>
            <button class="inline-flex flex-shrink-0 justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                <i class="ri-close-line text-2xl"></i>
            </button>
        </div>
        <div class="p-4 overflow-y-auto text-sm space-y-6">
           
            {{-- Informasi Akun Warga --}}
            <div class="space-y-2">
                <h4 class="font-semibold text-gray-800 dark:text-white underline">Informasi Akun Warga</h4>
                <p><strong>NIK Warga:</strong> <span id="detail-nik"></span></p>
                <p><strong>Nama Warga:</strong> <span id="detail-name"></span></p>
                <p><strong>Email Warga:</strong> <span id="detail-email"></span></p>
            </div>

            {{-- Informasi Pemohon Surat --}}
            <div class="space-y-2">
                <h4 class="font-semibold text-gray-800 dark:text-white underline">Informasi Pemohon Surat</h4>
                <p><strong>ID Pengajuan:</strong> <span id="detail-pengajuan_id"></span></p>
                <p><strong>NIK Pemohon:</strong> <span id="detail-nik_pemohon"></span></p>
                <p><strong>Nama Pemohon:</strong> <span id="detail-nama_pemohon"></span></p>
                <p><strong>Jenis Surat:</strong> <span id="detail-jenis"></span></p>
                <p><strong>Status Pengajuan:</strong> <span id="detail-status"></span></p>
                <p><strong>Nomor Surat:</strong> <span id="detail-nomorsurat"></span></p>
                <p><strong>Catatan Admin:</strong> <span id="detail-catatan"></span></p>
                <p><strong>File TTD:</strong> <span id="detail-ttd"></span></p>
                <p><strong>File Surat:</strong> <span id="detail-surat"></span></p>
                <p><strong>Tanggal Pengajuan:</strong> <span id="detail-created"></span></p>
                <p><strong>Tanggal Verifikasi:</strong> <span id="detail-verifikasi"></span></p>
            </div>
        </div>
        <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
            <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss type="button">Tutup</button>
        </div>
    </div>
</div>