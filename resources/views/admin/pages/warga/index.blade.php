@extends('admin.layouts.vertical', ['title' => 'Warga', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Warga'])

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

        <!-- Tabel Warga -->

        <div class="justify-between items-center mb-4">
            <h3 class="card-title mb-4">Table data warga RT.36</h3>
        </div>
        <div class="text-end mb-4">
            <div class="inline-flex space-x-2">
                <a href="{{ route('admin.data-warga.create') }}" class="btn bg-primary text-white">Tambah data</a>
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
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">No</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">No.KK</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">NIK</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Nama Lengkap</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Jenis Kelamin</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Status Hubungan dalam Keluarga</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Tanggal Dibuat</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Tanggal Diubah</th>
                                <th scope="col" class="px-2 py-2 text-center text-sm font-medium text-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700 uppercase">
                            @forelse($warga as $index => $item)
                            <tr>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $index + 1 }}</td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->kk->no_kk ?? '-' }} 
                                    <a href="{{ route('admin.kartu-keluarga.detail', $item->kk->id) }}" class="text-primary normal-case">
                                        <small><i>Lihat kk</i></small>
                                    </a>
                                </td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nik }}</td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nama_lengkap }}</td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->jenis_kelamin }}</td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm">
                                    @switch($item->status_hubungan_dalam_keluarga)
                                        @case('Kepala Keluarga')
                                            <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-success text-white">Kepala Keluarga</span>
                                            @break

                                        @case('Istri')
                                            <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-danger text-white">Istri</span>
                                            @break

                                        @case('Anak')
                                            <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-info text-white">Anak</span>
                                            @break

                                        @default
                                            <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-dark text-white">{{ $item->status_hubungan_dalam_keluarga }}</span>
                                    @endswitch
                                </td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->created_at->translatedFormat('d F Y H:i') }}</td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->updated_at->translatedFormat('d F Y H:i') }}</td>
                                <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200 text-center">
                                    <a href="javascript:void(0)" 
                                        class="open-detail-modal" 
                                        data-fc-target="user-detail-modal" 
                                        data-fc-type="modal"
                                        data-no_kk="{{ $item->kk->no_kk }}"
                                        data-nik="{{ $item->nik }}"
                                        data-nama_lengkap="{{ $item->nama_lengkap }}"
                                        data-tempat_lahir="{{ $item->tempat_lahir }}"
                                        data-tanggal_lahir="{{ $item->tanggal_lahir }}"
                                        data-agama="{{ $item->agama }}"
                                        data-pendidikan="{{ $item->pendidikan }}"
                                        data-jenis_pekerjaan="{{ $item->jenis_pekerjaan }}"
                                        data-golongan_darah="{{ $item->golongan_darah }}"
                                        data-status_perkawinan="{{ $item->status_perkawinan }}"
                                        data-status_hubungan_dalam_keluarga="{{ $item->status_hubungan_dalam_keluarga }}"
                                        data-kewarganegaraan="{{ $item->kewarganegaraan }}"
                                        data-nama_ayah="{{ $item->nama_ayah }}"
                                        data-nama_ibu="{{ $item->nama_ibu }}"
                                        data-created="{{ $item->created_at->format('d-m-Y') }}"
                                        data-updated="{{ $item->updated_at->format('d-m-Y') }}">
                                        <i class="ri-file-info-fill text-xl text-info"></i>
                                    </a>
                                    <a href="{{ route('admin.data-warga.edit', $item->id) }}"><i class="ri-edit-box-fill text-xl text-warning"></i></a>
                                    <a href="javascript:void(0)"
                                        class="open-delete-modal"
                                        data-fc-target="user-delete-modal"
                                        data-fc-type="modal"
                                        data-id="{{ $item->id }}"
                                        data-nik="{{ $item->nik }}"
                                        data-nama_lengkap="{{ $item->nama_lengkap }}">
                                        <i class="ri-delete-bin-2-fill text-xl text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-2 py-2 text-center text-sm text-gray-500 dark:text-gray-300">
                                        Tidak ada data warga.
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- End Table Warga -->

        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
            Menampilkan total <span class="font-semibold">{{ $warga->count() }}</span> data warga.
        </p>
    </div>
</div>

@include('admin.pages.warga.detail')

@include('admin.pages.warga.delete')

@include('admin.pages.warga.import')

@endsection

@section('script')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        // Detail Modal
        const detailButtons = document.querySelectorAll('.open-detail-modal');
        detailButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('detail-no_kk').textContent = this.dataset.no_kk;
                document.getElementById('detail-nik').textContent = this.dataset.nik;
                document.getElementById('detail-nama_lengkap').textContent = this.dataset.nama_lengkap;
                document.getElementById('detail-jenis_kelamin').textContent = this.dataset.jenis_kelamin;
                document.getElementById('detail-tempat_lahir').textContent = this.dataset.tempat_lahir;
                document.getElementById('detail-tanggal_lahir').textContent = this.dataset.tanggal_lahir;
                document.getElementById('detail-agama').textContent = this.dataset.agama;
                document.getElementById('detail-pendidikan').textContent = this.dataset.pendidikan;
                document.getElementById('detail-jenis_pekerjaan').textContent = this.dataset.jenis_pekerjaan;
                document.getElementById('detail-golongan_darah').textContent = this.dataset.golongan_darah;
                document.getElementById('detail-status_perkawinan').textContent = this.dataset.status_perkawinan;
                document.getElementById('detail-status_hubungan_dalam_keluarga').textContent = this.dataset.status_hubungan_dalam_keluarga;
                document.getElementById('detail-kewarganegaraan').textContent = this.dataset.kewarganegaraan;
                document.getElementById('detail-nama_ayah').textContent = this.dataset.nama_ayah;
                document.getElementById('detail-nama_ibu').textContent = this.dataset.nama_ibu;
                document.getElementById('detail-created').textContent = this.dataset.created;
                document.getElementById('detail-updated').textContent = this.dataset.updated;
            });
        });

        // Delete Modal
        const deleteButtons = document.querySelectorAll('.open-delete-modal');
        const deleteForms = document.getElementById('delete-form');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('delete-id').value = this.dataset.id;
                document.getElementById('delete-nik').textContent = this.dataset.nik;
                document.getElementById('delete-nama_lengkap').textContent = this.dataset.nama_lengkap;

                deleteForms.action = `/admin/data-warga/delete/${this.dataset.id}`;
            });
        });

        // Import Modal
        const importButtons = document.querySelectorAll('.open-import-modal');
        const importForms = document.getElementById('import-form');
    });
</script>

@endsection