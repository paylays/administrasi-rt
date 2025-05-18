@extends('admin.layouts.vertical', ['title' => 'Kartu Keluarga', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Kartu Keluarga'])

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

<div class="card">
    <div class="p-6">
        <div class="justify-between items-center mb-4">
            <h3 class="card-title mb-4">Table data kartu keluarga RT.36</h3>
        </div>
        <div class="text-end mb-4">
            <div class="inline-flex space-x-2">
                <a href="{{ route('admin.kartu-keluarga.create') }}" class="btn bg-primary text-white">Tambah data</a>
                <a href="javascript:void(0)"
                    class="open-import-modal btn bg-success text-white"
                    data-fc-target="user-import-modal"
                    data-fc-type="modal">
                    <i class="ri-file-excel-line me-1.5"></i>
                    Import
                </a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No.KK</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Nama Kepala Keluarga</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Alamat</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">RT / RW</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Dibuat</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Diubah</th>
                                <th scope="col" class="px-4 py-4 text-center text-sm font-medium text-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700 uppercase">
                            @forelse($kk as $index => $item)
                            <tr>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->no_kk ?? '-' }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nama_kepala_keluarga }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->alamat }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->rt }}/{{ $item->rw ?? '-' }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->updated_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200 text-center">
                                    <a href="{{ route('admin.kartu-keluarga.detail', $item->id) }}"><i class="ri-file-info-fill text-xl text-info"></i></a>
                                    <a href="{{ route('admin.kartu-keluarga.edit', $item->id) }}"><i class="ri-edit-box-fill text-xl text-warning"></i></a>
                                    <a href="javascript:void(0)"
                                        class="open-delete-modal"
                                        data-fc-target="user-delete-modal"
                                        data-fc-type="modal"
                                        data-id="{{ $item->id }}"
                                        data-no_kk="{{ $item->no_kk }}"
                                        data-nama_kepala_keluarga="{{ $item->nama_kepala_keluarga }}">
                                        <i class="ri-delete-bin-2-fill text-xl text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                        Tidak ada data kartu keluarga.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
            Menampilkan total <span class="font-semibold">{{ $kk->count() }}</span> data kartu keluarga.
        </p>
    </div>
</div> <!-- end card -->

@include('admin.pages.kartu-keluarga.delete')

@include('admin.pages.kartu-keluarga.import')

@endsection

@section('script')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Delete Modal
        const deleteButtons = document.querySelectorAll('.open-delete-modal');
        const deleteForms = document.getElementById('delete-form');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('delete-id').value = this.dataset.id;
                document.getElementById('delete-no_kk').textContent = this.dataset.no_kk;
                document.getElementById('delete-nama_kepala_keluarga').textContent = this.dataset.nama_kepala_keluarga;

                deleteForms.action = `/admin/kartu-keluarga/delete/${this.dataset.id}`;
            });
        });

        // Import Modal
        const importButtons = document.querySelectorAll('.open-import-modal');
        const importForms = document.getElementById('import-form');
    });

</script>

@endsection