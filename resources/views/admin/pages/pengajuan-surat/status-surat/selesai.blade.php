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
            <h3 class="card-title mb-4">Table pengajuan surat oleh warga dengan status <strong class="text-success uppercase">Selesai</strong></h3>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">ID Pengajuan</th>
                                <th scope="col" class="px-4 py-4 text-start text-sm font-medium text-gray-500">No. Surat</th>
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
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->nomor_surat }}</td>
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
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->created_at->translatedFormat('d F Y H:i') }}</td>
                                <td class="px-4 py-4 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200 text-center">
                                    <a href="javascript:void(0)" 
                                        class="open-detail-modal" 
                                        data-fc-target="user-detail-modal" 
                                        data-fc-type="modal"
                                        data-pengajuan_id="{{ $item->pengajuan_id }}"
                                        data-nik_pemohon="{{ $item->data_pengajuan['nik_pemohon'] ?? '-' }}"
                                        data-nama_pemohon="{{ $item->data_pengajuan['nama'] ?? '-' }}"
                                        data-nik="{{ $item->user->nik ?? 'Belum verifikasi NIK' }}"
                                        data-name="{{ $item->user->name }}"
                                        data-email="{{ $item->user->email }}"
                                        data-jenis="{{ $item->jenisSurat->nama_surat }}"
                                        data-status="{{ $item->status }}"
                                        data-nomorsurat="{{ $item->nomor_surat ?? '-' }}"
                                        data-verifikasi="{{ $item->tanggal_verifikasi ? \Carbon\Carbon::parse($item->tanggal_verifikasi)->translatedFormat('d F Y H:i') : '-' }}"
                                        data-catatan="{{ $item->catatan_admin ?? '-' }}"
                                        data-ttd="{{ $item->file_ttd ?? '-' }}"
                                        data-surat="{{ $item->file_surat ?? '-' }}"
                                        data-created="{{ $item->created_at->translatedFormat('d F Y H:i') }}">
                                        <i class="ri-file-info-fill text-xl text-info"></i>
                                    </a>
                                    <a href="javascript:void(0)"
                                        class="open-delete-modal"
                                        data-fc-target="user-delete-modal"
                                        data-fc-type="modal"
                                        data-id="{{ $item->id }}"
                                        data-pengajuan_id="{{ $item->pengajuan_id }}"
                                        data-nik="{{ $item->user->nik ?? 'Belum verifikasi NIK' }}"
                                        data-email="{{ $item->user->email ?? '-' }}"
                                        data-name="{{ $item->user->name ?? '-' }}"
                                        data-nik_pemohon="{{ $item->data_pengajuan['nik_pemohon'] ?? '-' }}"
                                        data-nama_pemohon="{{ $item->data_pengajuan['nama'] ?? '-' }}">
                                        <i class="ri-delete-bin-2-fill text-xl text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-4 py-4 text-center text-sm text-gray-500 dark:text-gray-300">
                                        Tidak ada surat status selesai.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
            Menampilkan total <span class="font-semibold">{{ $pengajuans->count() }}</span> surat status selesai.
        </p>

        <!-- End Table Pengajuan Surat -->

    </div>
</div>

@include('admin.pages.pengajuan-surat.detail')

@include('admin.pages.pengajuan-surat.delete')

@endsection

@section('script')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Detail Modal
        const detailButtons = document.querySelectorAll('.open-detail-modal');
        detailButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('detail-pengajuan_id').textContent = this.dataset.pengajuan_id;
                document.getElementById('detail-nik_pemohon').textContent = this.dataset.nik_pemohon;
                document.getElementById('detail-nama_pemohon').textContent = this.dataset.nama_pemohon;
                document.getElementById('detail-nik').textContent = this.dataset.nik;
                document.getElementById('detail-name').textContent = this.dataset.name;
                document.getElementById('detail-email').textContent = this.dataset.email;
                document.getElementById('detail-jenis').textContent = this.dataset.jenis;
                document.getElementById('detail-status').textContent = this.dataset.status;
                document.getElementById('detail-nomorsurat').textContent = this.dataset.nomorsurat;
                document.getElementById('detail-verifikasi').textContent = this.dataset.verifikasi;
                document.getElementById('detail-catatan').textContent = this.dataset.catatan;
                document.getElementById('detail-ttd').textContent = this.dataset.ttd;
                document.getElementById('detail-surat').textContent = this.dataset.surat;
                document.getElementById('detail-created').textContent = this.dataset.created;
            });
        });

        // Delete Modal
        const deleteButtons = document.querySelectorAll('.open-delete-modal');
        const deleteForms = document.getElementById('delete-form');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('delete-id').value = this.dataset.id;
                document.getElementById('delete-pengajuan_id').textContent = this.dataset.pengajuan_id;
                document.getElementById('delete-nik').textContent = this.dataset.nik;
                document.getElementById('delete-email').textContent = this.dataset.email;
                document.getElementById('delete-name').textContent = this.dataset.name;
                document.getElementById('delete-nik_pemohon').textContent = this.dataset.nik_pemohon;
                document.getElementById('delete-nama_pemohon').textContent = this.dataset.nama_pemohon;
                deleteForms.action = `/admin/pengajuan-surat/delete/${this.dataset.id}`;
            });
        });
    });

</script>

@endsection
