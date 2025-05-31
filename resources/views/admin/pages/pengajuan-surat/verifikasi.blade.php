@extends('admin.layouts.vertical', ['title' => 'Pengajuan Surat', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Pengajuan Surat'])

@section("content")

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

<div class="grid xl:grid-cols-1 grid-cols-1 space-y-6">

    {{-- Informasi Akun Warga --}}
    <div class="card">
        <div class="p-6">
            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700">
                <i class="ri-user-line me-1.5"></i> Informasi Akun Warga
            </h5>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-3">
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Nama Lengkap</label>
                        <div class="text-gray-800 dark:text-gray-200">
                            {{ $pengajuan->user->name ?? '-' }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">NIK</label>
                        <div class="text-gray-800 dark:text-gray-200">
                            {{ $pengajuan->user->nik ?? '-' }}
                        </div>
                    </div>
                </div>

                <div class="space-y-3">
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Nomor HP</label>
                        <div class="text-gray-800 dark:text-gray-200">
                            {{ $pengajuan->user->no_hp ?? '-' }}
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 font-semibold">Alamat Email</label>
                        <div class="text-gray-800 dark:text-gray-200">
                            {{ $pengajuan->user->email ?? '-' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Informasi Pemohon Pengajuan Surat --}}
    <div class="card">
        <div class="p-6">
            <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700">
                <i class="ri-group-line me-1.5"></i> Informasi Pemohon Pengajuan Surat
            </h5>

            <div class="mb-6">
                <label class="block font-semibold text-sm text-gray-600 mb-1">Jenis Surat</label>
                <div class="flex justify-between items-center">
                    <div class="text-base font-bold text-primary">
                        {{ $pengajuan->jenisSurat->nama_surat ?? '-' }}
                    </div>
                    <a href="{{ route('admin.pengajuan-surat.preview', $pengajuan->id) }}" 
                    class="underline text-blue-600 hover:text-blue-800 text-sm"
                    target="_blank">
                        Preview Surat
                    </a>
                </div>
            </div>

            {{-- Tanggal Pengajuan --}}
            <div class="mb-6">
                <label class="block font-semibold text-sm text-gray-600 mb-1">Tanggal Pengajuan</label>
                <div class="text-base font-bold text-danger">
                    {{ \Carbon\Carbon::parse($pengajuan->created_at)->translatedFormat('l, d F Y H:i') }}
                </div>
            </div>

            @php
                $dataPengajuan = collect($pengajuan->data_pengajuan);
                $nik_pemohon = $dataPengajuan->pull('nik_pemohon');
                $half = ceil($dataPengajuan->count() / 2);
                $left = $dataPengajuan->slice(0, $half);
                $right = $dataPengajuan->slice($half);
                \Carbon\Carbon::setLocale('id');
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- Kolom Kiri --}}
                <div class="space-y-3 mt-3">
                    @if ($nik_pemohon)
                        <div>
                            <label class="block text-sm text-gray-600 font-semibold capitalize">NIK Pemohon</label>
                            <div class="text-gray-800 dark:text-gray-200">{{ $nik_pemohon ?? '-' }}</div>
                        </div>
                    @endif
                    @foreach ($left as $key => $value)
                        <div>
                            <label class="block text-sm text-gray-600 font-semibold capitalize">{{ str_replace('_', ' ', $key) }}</label>
                            <div class="text-gray-800 dark:text-gray-200">
                                @if ($key === 'tanggal_lahir' && !is_array($value))
                                    {{ \Carbon\Carbon::parse($value)->translatedFormat('j F Y') }}
                                @elseif (is_array($value))
                                    <ul class="list-disc list-inside">
                                        @foreach ($value as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ $value }}
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Kolom Kanan --}}
                <div class="space-y-3 mt-3">
                    @foreach ($right as $key => $value)
                        <div>
                            <label class="block text-sm text-gray-600 font-semibold capitalize">{{ str_replace('_', ' ', $key) }}</label>
                            <div class="text-gray-800 dark:text-gray-200">
                                @if ($key === 'tanggal_lahir' && !is_array($value))
                                    {{ \Carbon\Carbon::parse($value)->translatedFormat('j F Y') }}
                                @elseif (is_array($value))
                                    <ul class="list-disc list-inside">
                                        @foreach ($value as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    {{ $value }}
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Verifikasi Pengajuan</h3>
        </div>
        <div class="p-6">
            <form method="POST" action="{{ route('admin.pengajuan-surat.verifikasi', $pengajuan->id) }}" enctype="multipart/form-data">
                @csrf

                <h5 class="mb-6 uppercase text-base bg-light p-2 dark:bg-gray-700">
                    <i class="ri-check-double-line me-1.5"></i>Verifikasi Surat
                </h5>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <!-- Nomor Surat -->
                    <div class="space-y-2">
                        <label for="nomor_surat" class="font-semibold text-gray-500">
                            Nomor Surat <span class="text-danger">*</span>
                        </label>
                        <div class="flex items-center gap-2">
                            <input type="text" name="nomor" class="form-input w-24" placeholder="Nomor" 
                                value="{{ old('nomor', explode('/', $pengajuan->nomor_surat)[0] ?? '') }}" required>

                            <span>/RT.036/GSM/</span>

                            <input type="text" name="bulan" class="form-input w-28" placeholder="Bulan (angka atau romawi)" 
                                value="{{ old('bulan', explode('/', $pengajuan->nomor_surat)[3] ?? '') }}" required>

                            <span>/2025</span>
                        </div>
                    </div>

                    <!-- File TTD -->
                    <div class="space-y-2">
                        <label for="file_ttd" class="font-semibold text-gray-500">
                            File Tanda Tangan (TTD)
                        </label>
                        <input type="file" name="file_ttd" id="file_ttd" class="form-input">
                    </div>
                </div>

                <div class="flex gap-2 justify-between items-center">
                    <a href="{{ route('admin.pengajuan-surat') }}" class="btn bg-light text-gray-800">
                        <i class="ri-arrow-left-line text-sm me-1.5"></i> Kembali
                    </a>
                    <div class="flex gap-2">
                        <a href="javascript:void(0)"
                            class="open-tolak-modal btn bg-danger text-white"
                            data-fc-target="user-tolak-modal"
                            data-fc-type="modal"
                            data-id="{{ $pengajuan->id }}"
                            data-nama="{{ $pengajuan->data_pengajuan['nama'] ?? 'Nama tidak ditemukan' }}">
                            Tolak Pengajuan
                        </a>
                        <button type="submit" class="btn bg-success text-white">Verifikasi</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>


@include('admin.pages.pengajuan-surat.tolak')


@endsection

@section('script')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Modal Tolak
        const tolakButtons = document.querySelectorAll('.open-tolak-modal');
        const tolakForm = document.getElementById('tolak-form');
        tolakButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('tolak-id').value = this.dataset.id;
                document.getElementById('tolak-nama').textContent = this.dataset.nama;
                tolakForm.action = `{{ route('admin.pengajuan-surat.tolak') }}`;
            });
        });
    });
</script>

@endsection

