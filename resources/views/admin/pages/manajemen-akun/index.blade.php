@extends('admin.layouts.vertical', ['title' => 'Manajemen Akun', 'subTitle' => 'Pengguna' , 'pageTitle' => 'Manajemen Akun'])

@section("content")

@if(session('success'))
    <div id="dismiss-example-success" class="border bg-success text-white border-success rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p>
            <span class="font-bold">Success!</span> - 
            {{ session('success') }}
        </p>
        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-success" type="button">
            <i class="ri-close-line text-xl"></i>   
        </button>
    </div>
@endif
@if(session('error'))
    <div id="dismiss-example-danger" class="border bg-danger text-white border-danger rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p>
            <span class="font-bold">Error!</span> - 
            {{ session('error') }}
        </p>
        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-danger" type="button">
            <i class="ri-close-line text-xl"></i>   
        </button>
    </div>
@endif

<div class="grid xl:grid-cols-12 grid-cols-1 gap-6">

    <!-- Tabel Warga -->
    <div class="xl:col-span-8">
        <div class="card">
            <div class="p-6">
                <div class="justify-between items-center mb-4">
                    <h3 class="card-title mb-4">Daftar akun warga</h3>
                </div>

                <div class="overflow-x-auto">
                    <div class="min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">NIK</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Nama</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Email</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Dibuat</th>
                                        <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Diubah</th>
                                        <th scope="col" class="px-4 py-4 text-center text-sm font-medium text-gray-500">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @forelse($users as $index => $item)
                                    <tr>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $index + 1 }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap {{ is_null($item->nik) ? 'text-danger' : 'text-gray-700 dark:text-gray-200' }}">{{ $item->nik ?? 'Belum verifikasi NIK' }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->name }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->email }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->created_at->format('d-m-Y') }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->updated_at->format('d-m-Y') }}</td>
                                        <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200 text-center">
                                            <a href="javascript:void(0)" 
                                                class="open-detail-modal" 
                                                data-fc-target="user-detail-modal" 
                                                data-fc-type="modal"
                                                data-nik="{{ $item->nik ?? 'Belum verifikasi NIK' }}"
                                                data-name="{{ $item->name }}"
                                                data-email="{{ $item->email }}"
                                                data-created="{{ $item->created_at->format('d-m-Y') }}"
                                                data-updated="{{ $item->updated_at->format('d-m-Y') }}">
                                                <i class="ri-file-info-fill text-xl text-info"></i>
                                            </a>
                                            <a href="#"><i class="ri-edit-box-fill text-xl text-warning"></i></a>
                                            <a href="#"><i class="ri-delete-bin-2-fill text-xl text-danger"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                                Tidak ada data akun warga.
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                            <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                                Menampilkan total <span class="font-semibold">{{ $users->count() }}</span> data akun warga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div>

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
                <p><strong>NIK:</strong> <span id="modal-nik"></span></p>
                <p><strong>Nama:</strong> <span id="modal-name"></span></p>
                <p><strong>Email:</strong> <span id="modal-email"></span></p>
                <p><strong>Tanggal Dibuat:</strong> <span id="modal-created"></span></p>
                <p><strong>Tanggal Diubah:</strong> <span id="modal-updated"></span></p>
            </div>
            <div class="flex justify-end items-center gap-2 p-4 border-t dark:border-slate-700">
                <button class="btn bg-light text-gray-800 transition-all" data-fc-dismiss type="button">Tutup</button>
            </div>
        </div>
    </div>


    <!-- Form Tambah Warga -->
    <div class="col-span-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Akun Warga</h3>
            </div>

            <div class="p-6">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="mb-6 space-y-2">
                        <label for="name" class="font-semibold text-gray-500">Nama</label>
                        <input class="form-input" type="text" id="name" name="name" placeholder="Masukkan nama warga">
                    </div>
    
                    <div class="mb-6 space-y-2">
                        <label for="email" class="font-semibold text-gray-500">Email</label>
                        <input class="form-input" type="email" id="email" name="email" placeholder="Masukkan email warga">
                    </div>
    
                    <div class="mb-6 space-y-2">
                        <label for="password" class="font-semibold text-gray-500">Kata Sandi</label>
                        <div class="flex items-center">
                            <input type="password" id="password" name="password" class="form-input rounded-e-none" placeholder="******">
                            <span class="px-3.5 py-1 bg-light/30 dark:bg-slate-700/60 border rounded-e -ms-px dark:border-white/10"><i class="ri-eye-line text-lg"></i></span>
                        </div>
                    </div>
    
                    <div class="mb-6 space-y-2">
                        <label for="password_confirmation" class="font-semibold text-gray-500">Konfirmasi Kata Sandi</label>
                        <div class="flex items-center">
                            <input type="password" id="password_confirmation" name="password_confirmation" class="form-input rounded-e-none" placeholder="******">
                            <span class="px-3.5 py-1 bg-light/30 dark:bg-slate-700/60 border rounded-e -ms-px dark:border-white/10"><i class="ri-eye-line text-lg"></i></span>
                        </div>
                    </div>
    
                    <div class="text-start">
                        <button class="btn bg-primary text-white" type="submit"> Tambah Sekarang </button>
                    </div>
    
                </form>
            </div>
        </div>
    </div>


</div>
@endsection

@section('script')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const buttons = document.querySelectorAll('.open-detail-modal');
        buttons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('modal-nik').textContent = this.dataset.nik;
                document.getElementById('modal-name').textContent = this.dataset.name;
                document.getElementById('modal-email').textContent = this.dataset.email;
                document.getElementById('modal-created').textContent = this.dataset.created;
                document.getElementById('modal-updated').textContent = this.dataset.updated;
            });
        });
    });
</script>


@endsection