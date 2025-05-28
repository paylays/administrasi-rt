@extends('admin.layouts.vertical', ['title' => 'Pengajuan Surat', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Pengajuan Surat'])

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

        <!-- Tabel Pengajuan Surat -->

        <div class="justify-between items-center mb-4">
            <h3 class="card-title mb-4">Table pengajuan surat oleh warga</h3>
        </div>
        <div class="text-end mb-4">
            <div class="inline-flex space-x-2">
                <a href="#" class="btn bg-primary text-white">Tambah data</a>
            </div>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">ID Pengajuan</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">NIK Pemohon</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Nama Pemohon</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Keperluan Surat</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Status</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">Tanggal Pengajuan</th>
                                <th scope="col" class="px-4 py-4 text-center text-sm font-medium text-gray-500">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                           @forelse($pengajuans as $index => $item)
                            <tr>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $index + 1 }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->pengajuan_id }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->user->nik ?? '-' }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->data_pengajuan['nama'] ?? '-' }}</td>
                                <td class="px-4 py-4 text-sm text-gray-700 dark:text-gray-200">
                                    @php
                                        $keperluan = $item->data_pengajuan['keperluan_surat'] ?? [];
                                    @endphp

                                    @if(is_array($keperluan) && count($keperluan))
                                        <ul class="list-disc ml-5">
                                            @foreach($keperluan as $kep)
                                                <li>{{ $kep }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <span>-</span>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">
                                    {{ $item->status }}

                                    @if($item->status === 'Sedang Diverifikasi')
                                        <div class="mt-1">
                                            <a href="{{ route('admin.pengajuan-surat.verifikasi', $item->id) }}" 
                                                class="btn bg-success text-white">
                                                Verifikasi Sekarang
                                            </a>
                                        </div>
                                    @elseif($item->status === 'Selesai')
                                        <div class="mt-1">
                                            <a href="{{ route('admin.pengajuan-surat.preview-selesai', $item->id) }}"
                                                target="_blank"
                                                class="underline text-blue-600 hover:text-blue-800">
                                                Preview Surat
                                            </a>
                                        </div>
                                    @endif
                                </td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->created_at->format('d M Y H:i') }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200 text-center">
                                    <a href="#"><i class="ri-file-info-fill text-xl text-info"></i></a>
                                    <a href="#"><i class="ri-edit-box-fill text-xl text-warning"></i></a>
                                    <a href="javascript:void(0)"
                                        class="open-delete-modal"
                                        data-fc-target="user-delete-modal"
                                        data-fc-type="modal">
                                        <i class="ri-delete-bin-2-fill text-xl text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                        Tidak ada data pengajuan surat.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
            Menampilkan total <span class="font-semibold">{{ $pengajuans->count() }}</span> pengajuan surat.
        </p>

        <!-- End Table Pengajuan Surat -->

    </div>
</div>

@endsection
