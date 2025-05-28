@extends('user.layouts.vertical', ['title' => 'Ajukan Surat', 'subTitle' => 'Administrasi Surat' , 'pageTitle' => 'Ajukan Surat'])

@section("content")

@if(session('success'))
    <div id="dismiss-example-success" class="border bg-success text-white border-success rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p class="flex-1">
            <span class="font-bold">Success!</span> - {{ session('success') }}
        </p>
        <button class="text-xl/[0]" onclick="document.getElementById('dismiss-example-success').remove()" type="button">
            <i class="ri-close-line text-xl"></i>
        </button>
    </div>
@endif

<div class="card">
    <div class="p-6">
        <h4 class="card-title mb-1">Pilih jenis surat yang tersedia dibawah</h4>

        <div class="pt-5">
            <div data-fc-type="accordion" class="space-y-3">
                @php
                    $user = Auth::user();
                @endphp

                <!-- Accordion item One -->
                <div class="card">
                    <button data-fc-type="collapse" class="py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full font-semibold text-left transition text-gray-500 dark:text-gray-200">
                        Surat Pengantar ke RT
                        <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                    </button> <!-- button end -->

                    <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                        <div class="py-4 px-5">
                            <p class="text-gray-800 dark:text-gray-200">
                                Lorem ipsum dolor sit amet consectetur, 
                                adipisicing elit. Officiis, laudantium porro? 
                                Nemo possimus culpa assumenda reprehenderit fugiat cupiditate obcaecati, in, 
                                odit rem quas perspiciatis ducimus soluta, voluptatum ipsum magnam vero?
                            </p>
                            <div class="mt-2 text-end">
                                <a href="{{ route('user.ajukan-surat.surat-pengantar-rt') }}" class="btn bg-primary/25 text-primary hover:bg-primary hover:text-white">
                                    Ajukan Sekarang
                                </a>    
                            </div>
                        </div>
                    </div>
                </div> <!-- card end -->

            </div> <!-- accordion end -->
        </div>
    </div> <!-- card end -->
</div> <!-- card end -->

<div class="my-6">
    <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Riwayat Pengajuan Surat</h4>
</div>

<div class="grid sm:grid-cols-3 gap-6">
    @forelse ($riwayat as $item)
        <div class="card border border-success">
            <div class="p-6">
                <h3 class="text-base font-bold text-success dark:text-white mb-2">
                    ID Pengajuan: {{ $item->pengajuan_id }}
                </h3>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3"><strong>Status:</strong> {{ $item->status }}</p>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3"><strong>NIK Pemohon:</strong> {{ $item->user->nik ?? '-' }}</p>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3"><strong>Jenis Surat:</strong> {{ $item->jenisSurat->nama_surat ?? '-' }}</p>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3"><strong>Tanggal Pengajuan:</strong> {{ $item->created_at->format('d M Y H:i') }}</p>
                @if($item->tanggal_verifikasi)
                    <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">
                        <strong>Tanggal Selesai:</strong> {{ \Carbon\Carbon::parse($item->tanggal_verifikasi)->translatedFormat('d M Y H:i') }}
                    </p>
                @endif
                @if($item->status === 'Selesai' && $item->file_surat)
                    <a href="{{ Storage::url($item->file_surat) }}" 
                    class="inline-block mt-3 text-blue-600 underline hover:text-blue-800"
                    target="_blank">
                    Download Surat
                    </a>
                @endif
            </div>
        </div><!-- Card End -->
    @empty
        <p class="text-center col-span-3">Belum ada riwayat pengajuan surat.</p>
    @endforelse
</div><!-- Grid End -->

@endsection