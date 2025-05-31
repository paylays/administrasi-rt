@extends('user.layouts.vertical', ['title' => 'Dashboard Warga','subTitle' => 'Menu', 'pageTitle' => 'Dashboard Warga'])

@section('css')
    @vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])
@endsection

@section('content')

@if(session('success'))
    <div id="dismiss-example-success" class="border bg-success text-white border-success rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p>
            <span class="font-bold">Success!</span> - {{ session('success') }}
        </p>
        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-success" type="button">
            <i class="ri-close-line text-xl"></i>
        </button>
    </div>
@endif

{{-- Selamat Datang --}}
<div class="text-center mt-6 mb-6">
    <h1 class="text-3xl font-bold text-gray-800 dark:text-white">Selamat Datang, {{ Auth::user()->name }}!</h1>
    <p class="text-gray-500 dark:text-gray-300 mt-2">Silakan mulai proses pengajuan surat dengan mengklik tombol di bawah ini. Pastikan data Anda sudah lengkap dan terverifikasi.</p>
</div>

{{-- Ajukan Surat --}}
<div class="flex justify-center mb-6">
    <a href="{{ route('user.ajukan-surat') }}"
       class="inline-flex items-center gap-2 bg-primary text-white px-5 py-3 rounded-full shadow-md hover:bg-primary/90 transition duration-200">
        <i class="ri-mail-add-line text-lg"></i> Ajukan Surat
    </a>
</div>

{{-- Data Pengajuan --}}
<div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-3 gap-6 mb-6">
    <div class="col-span-1">
        <div class="card">
            <div class="p-6">
                <div class="flex justify-between">
                    <div class="grow overflow-hidden">
                        <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Jumlah Pengajuan Surat">Pengajuan Surat</h5>
                        <h3 class="text-2xl my-6">{{ $jumlahPengajuan }}</h3>
                        <p class="text-gray-400 truncate">
                            <span class="bg-info rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-file-add-line"></i></span>
                            <span>Total surat yang diajukan</span>
                        </p>
                    </div>
                    <div class="shrink">
                        <div class="text-5xl text-info"><i class="ri-file-list-2-line"></i></div>
                    </div>
                </div>
            </div> <!-- end p-6-->
        </div> <!-- end card-->
    </div>

    <div class="col-span-1">
        <div class="card">
            <div class="p-6">
                <div class="flex justify-between">
                    <div class="grow overflow-hidden">
                        <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Jumlah Surat Selesai">Surat Selesai</h5>
                        <h3 class="text-2xl my-6">{{ $jumlahSelesai }}</h3>
                        <p class="text-gray-400 truncate">
                            <span class="bg-success rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-check-line"></i></span>
                            <span>Total surat yang telah selesai diproses</span>
                        </p>
                    </div>
                    <div class="shrink">
                        <div class="text-5xl text-success"><i class="ri-check-double-line"></i></div>
                    </div>
                </div>
            </div> <!-- end p-6-->
        </div> <!-- end card-->
    </div>

    <div class="col-span-1">
        <div class="card">
            <div class="p-6">
                <div class="flex justify-between">
                    <div class="grow overflow-hidden">
                        <h5 class="text-base/3 text-gray-400 font-normal mt-0" title="Jumlah Surat Ditolak">Surat Ditolak</h5>
                        <h3 class="text-2xl my-6">{{ $jumlahDitolak }}</h3>
                        <p class="text-gray-400 truncate">
                            <span class="bg-danger rounded-md text-xs px-1.5 py-0.5 text-white me-1"><i class="ri-close-line"></i></span>
                            <span>Pengajuan tidak diterima</span>
                        </p>
                    </div>
                    <div class="shrink">
                        <div class="text-5xl text-danger"><i class="ri-close-circle-line"></i></div>
                    </div>
                </div>
            </div> <!-- end p-6-->
        </div> <!-- end card-->
    </div>
</div>

@php use Carbon\Carbon; @endphp

<div class="relative space-y-6 pb-6">
    <!-- Center Border Line -->
    <div class="absolute border-s-2 border border-gray-300 h-full top-0 start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -z-10 dark:border-white/10"></div>

    <div class="md:text-center">
        <h1 class="text-lg py-2 px-4 bg-light inline rounded dark:bg-gray-700">
            Riwayat Pengajuan Surat
        </h1>
    </div>

    @foreach ($pengajuanSurat as $item)
        @php
            $isRight = $loop->iteration % 2 == 0;
            $tanggal = $item->status == 'Sedang Diverifikasi' ? $item->created_at : $item->tanggal_verifikasi;
            $tanggalFormatted = Carbon::parse($tanggal)->translatedFormat('d F Y H:i');
            $bgColor = match($item->status) {
                'Selesai' => 'bg-success/30 text-success',
                'Ditolak' => 'bg-danger/30 text-danger',
                default => 'bg-warning/30 text-warning',
            };
        @endphp

        <div class="{{ $isRight ? 'text-start' : 'md:text-end text-start' }}">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full {{ $bgColor }}">
                    <i class="ri-record-circle-fill text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="{{ $isRight ? 'md:col-start-2 col-span-2' : 'md:col-span-1 col-span-2' }}">
                    <div class="relative {{ $isRight ? 'md:ms-10 ms-20' : 'md:me-10 md:ms-0 ms-20' }}">
                        <div class="card p-5">
                            <h4 class="mb-1.5 text-base">Pengajuan Surat: {{ $item->jenisSurat->nama }}</h4>
                            <p class="mb-4 text-gray-500 dark:text-gray-200"><small>{{ $tanggalFormatted }}</small></p>
                            <p class="mb-4 text-gray-500 dark:text-gray-200">Status: 
                                <strong>
                                    <span class="inline-block px-2 py-1 rounded-full text-xs font-semibold {{ $bgColor ?? 'bg-gray-100 text-gray-800' }}">
                                        {{ $item->status }}
                                    </span>
                                </strong>
                            </p>
                            <a href="{{ route('user.ajukan-surat') }}" class="btn btn-sm bg-light !text-sm text-dark dark:text-white dark:bg-gray-700">📄 Detail</a>
                        </div>
                        <div class="bg-white dark:bg-gray-800 absolute h-4 w-4 rotate-45 rounded-sm top-7 {{ $isRight ? '-start-2' : 'md:-end-2 md:start-auto -start-2' }}"></div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>

@endsection

@section('script-bottom')
    @vite(['resources/js/pages/dashboard.js'])
@endsection