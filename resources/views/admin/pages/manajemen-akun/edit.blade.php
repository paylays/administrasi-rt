<div id="user-edit-modal" class="w-full h-full fixed top-0 left-0 z-50 transition-all duration-500 hidden overflow-y-auto">
    <div class="sm:max-w-lg sm:w-full m-3 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-gray-800">
        <form method="POST" action="{{ route('admin.manajemen-akun.update') }}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" id="edit-id">

            <div class="flex justify-between items-center py-2.5 px-4 border-b dark:border-gray-700">
                <h3 class="font-medium text-gray-600 dark:text-white text-lg">
                    Edit Akun Warga
                </h3>
                <button class="inline-flex justify-center items-center h-8 w-8 dark:text-gray-200" data-fc-dismiss type="button">
                    <i class="ri-close-line text-2xl"></i>
                </button>
            </div>

            <div class="p-4 space-y-4 text-sm">
                <div>
                    <label class="block text-gray-700 dark:text-gray-200">NIK</label>
                    <input type="text" name="nik" id="edit-nik" class="form-input w-full dark:bg-gray-700 dark:text-white">
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-200">Nama</label>
                    <input type="text" name="name" id="edit-name" class="form-input w-full dark:bg-gray-700 dark:text-white">
                </div>
                <div>
                    <label class="block text-gray-700 dark:text-gray-200">Email</label>
                    <input type="email" name="email" id="edit-email" class="form-input w-full dark:bg-gray-700 dark:text-white">
                </div>
            </div>

            <div class="flex justify-end gap-2 p-4 border-t dark:border-gray-700">
                <button type="button" class="btn bg-light text-gray-800" data-fc-dismiss>Tutup</button>
                <button type="submit" class="btn bg-primary text-white">Simpan</button>
            </div>
        </form>
    </div>
</div>
