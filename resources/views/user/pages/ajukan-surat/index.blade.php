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
                                Surat pengantar ini digunakan sebagai bukti permohonan administrasi dari RT setempat.
                            </p>
                            <div class="mt-2">
                                @if ($user->nik_verified == 1)
                                    <div class="text-end">
                                        <a href="{{ route('user.ajukan-surat.surat-pengantar-rt') }}"
                                        class="btn bg-primary/25 text-primary hover:bg-primary hover:text-white">
                                            Ajukan Sekarang
                                        </a>
                                    </div>
                                @else
                                    <div class="mt-4 bg-warning border-warning text-white text-sm rounded-md py-3 px-5">
                                        <strong>Perhatian:</strong> Anda belum melakukan verifikasi NIK. 
                                        Silakan verifikasi NIK anda di halaman <a href="{{ route('user.profile') }}" class="text-primary underline">profile</a>.
                                    </div>
                                @endif   
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
        @php
            $statusColors = [
                'Sedang Diverifikasi' => 'bg-warning text-yellow-900',
                'Sedang Diproses' => 'bg-primary text-blue-900',
                'Selesai' => 'bg-success text-green-900',
                'Ditolak' => 'bg-danger text-red-900',
            ];

            $borderColors = [
                'Sedang Diverifikasi' => 'border-warning',
                'Sedang Diproses' => 'border-primary',
                'Selesai' => 'border-success',
                'Ditolak' => 'border-danger',
            ];
        @endphp
        <div class="card border {{ $borderColors[$item->status] ?? 'border-gray-300' }}  h-[320px]">
            <div class="p-6">
                <h3 class="text-base font-bold text-info dark:text-white mb-2">
                    ID Pengajuan: {{ $item->pengajuan_id }}
                </h3>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3"><strong>Status:</strong>
                    <span class="inline-block px-2 py-1 rounded-full text-xs font-semibold {{ $statusColors[$item->status] ?? 'bg-gray-100 text-gray-800' }}">
                        {{ $item->status }}
                    </span>
                </p>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">
                    <strong>NIK Pemohon:</strong> {{ $item->user->nik ?? '-' }}
                </p>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3"><strong>Jenis Surat:</strong> {{ $item->jenisSurat->nama_surat ?? '-' }}</p>
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3"><strong>Tanggal Pengajuan:</strong> {{ $item->created_at->format('d M Y H:i') }}</p>
                @if($item->tanggal_verifikasi)
                    <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">
                        <strong>Tanggal Selesai:</strong> {{ \Carbon\Carbon::parse($item->tanggal_verifikasi)->translatedFormat('d M Y H:i') }}
                    </p>
                @endif
                <p class="mt-1 text-gray-800 dark:text-gray-400 mb-3">
                    <strong>Catatan Admin :</strong> {{ $item->catatan_admin ?? '-' }}
                </p>
                @if($item->status === 'Selesai' && $item->file_surat)
                    <div class="text-end">
                        <a href="{{ Storage::url($item->file_surat) }}" 
                        class="inline-block mt-3 text-blue-600 underline hover:text-blue-800"
                        target="_blank">
                        Unduh Surat
                        </a>
                    </div>
                @endif
            </div>
        </div><!-- Card End -->
    @empty
        <p class="text-center col-span-3">Belum ada riwayat pengajuan surat.</p>
    @endforelse
</div><!-- Grid End -->

@endsection