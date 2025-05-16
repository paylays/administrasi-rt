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

<div class="grid lg:grid-cols-12 grid-cols-1 gap-6">

    <!-- Tabel Akun Warga -->
    <div class="lg:col-span-8">
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
                                            <a href="javascript:void(0)"
                                                class="open-edit-modal"
                                                data-fc-target="user-edit-modal"
                                                data-fc-type="modal"
                                                data-id="{{ $item->id }}"
                                                data-nik="{{ $item->nik ?? '' }}"
                                                data-name="{{ $item->name }}"
                                                data-email="{{ $item->email }}">
                                                <i class="ri-edit-box-fill text-xl text-warning"></i>
                                            </a>
                                            <a href="javascript:void(0)"
                                                class="open-delete-modal"
                                                data-fc-target="user-delete-modal"
                                                data-fc-type="modal"
                                                data-id="{{ $item->id }}"
                                                data-email="{{ $item->email }}">
                                                <i class="ri-delete-bin-2-fill text-xl text-danger"></i>
                                            </a>
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
                        </div>
                    </div>
                </div>
                <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
                    Menampilkan total <span class="font-semibold">{{ $users->count() }}</span> data akun warga.
                </p>
            </div>
        </div> <!-- end card -->
    </div>

    @include('admin.pages.manajemen-akun.detail')

    @include('admin.pages.manajemen-akun.edit')

    @include('admin.pages.manajemen-akun.delete')

    <!-- Form Tambah Warga -->
    <div class="lg:col-span-4">
        <div class="card h-full min-h-full">
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
        // Detail Modal
        const detailButtons = document.querySelectorAll('.open-detail-modal');
        detailButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('detail-nik').textContent = this.dataset.nik;
                document.getElementById('detail-name').textContent = this.dataset.name;
                document.getElementById('detail-email').textContent = this.dataset.email;
                document.getElementById('detail-created').textContent = this.dataset.created;
                document.getElementById('detail-updated').textContent = this.dataset.updated;
            });
        });

        // Edit Modal
        const editButtons = document.querySelectorAll('.open-edit-modal');
        editButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('edit-id').value = this.dataset.id;
                document.getElementById('edit-nik').value = this.dataset.nik;
                document.getElementById('edit-name').value = this.dataset.name;
                document.getElementById('edit-email').value = this.dataset.email;
            });
        });

        // Delete Modal
        const deleteButtons = document.querySelectorAll('.open-delete-modal');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('delete-id').value = this.dataset.id;
                document.getElementById('delete-email').textContent = this.dataset.email;
            });
        });
    });

</script>

@endsection