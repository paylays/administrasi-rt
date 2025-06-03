@extends('admin.layouts.vertical', ['title' => 'Dashboard Admin', 'subTitle' => 'Pages' , 'pageTitle' => 'Dashboard Admin'])

@section('css')
@vite(['node_modules/jsvectormap/dist/css/jsvectormap.min.css'])

@section("content")

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

<!-- Row 1 -->
<div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6 mb-6">
    <!-- Card: Total Warga -->
    <div class="card">
        <div class="p-6">
            <div class="flex justify-between">
                <div class="grow overflow-hidden">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Total Warga">Total Warga</h5>
                    <h2 class="text-3xl my-3 py-0.5" id="total-warga-count">{{ $totalWarga }}</h2>
                    <p class="text-gray-400 truncate">
                        <span class="text-primary me-3"><i class="ri-user-line"></i></span>
                        <span class="whitespace-nowrap">Warga terdaftar</span>
                    </p>
                </div>
                <div class="shrink">
                    <div class="text-5xl text-info"><i class="ri-account-box-line"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Total Kartu Keluarga -->
    <div class="card">
        <div class="p-6">
            <div class="flex justify-between">
                <div class="grow overflow-hidden">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Total Kartu Keluarga">Kartu Keluarga</h5>
                    <h2 class="text-3xl my-3 py-0.5">{{ $totalKk }}</h2>
                    <p class="text-gray-400 truncate">
                        <span class="text-blue-500 me-3"><i class="ri-home-4-line"></i></span>
                        <span class="whitespace-nowrap">Kartu Keluarga terdata</span>
                    </p>
                </div>
                <div class="shrink">
                    <div class="text-5xl text-blue-500"><i class="ri-group-line"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Total Pengajuan Surat -->
    <div class="card">
        <div class="p-6">
            <div class="flex justify-between">
                <div class="grow overflow-hidden">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Total Pengajuan Surat">Pengajuan Surat</h5>
                    <h2 class="text-3xl my-3 py-0.5">{{ $totalPengajuanSurat }}</h2>
                    <p class="text-gray-400 truncate">
                        <span class="text-orange-500 me-3"><i class="ri-mail-send-line"></i></span>
                        <span class="whitespace-nowrap">Pengajuan tercatat</span>
                    </p>
                </div>
                <div class="shrink">
                    <div class="text-5xl text-orange-500"><i class="ri-draft-line"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Total Akun Warga -->
    <div class="card">
        <div class="p-6">
            <div class="flex justify-between">
                <div class="grow overflow-hidden">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Akun Warga Terdaftar">Akun Warga</h5>
                    <h2 class="text-3xl my-3 py-0.5">{{ $totalUser }}</h2>
                    <p class="text-gray-400 truncate">
                        <span class="text-green-500 me-3"><i class="ri-user-settings-line"></i></span>
                        <span class="whitespace-nowrap">Pengguna aktif</span>
                    </p>
                </div>
                <div class="shrink">
                    <div class="text-5xl text-green-500"><i class="ri-shield-user-line"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Row 2 -->
<div class="grid xl:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-6 mb-6">
    <!-- Card: Akun Terverifikasi -->
    <div class="card">
        <div class="p-6">
            <div class="flex justify-between">
                <div class="grow overflow-hidden">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Akun Terverifikasi">Terverifikasi NIK</h5>
                    <h2 class="text-3xl my-3 py-0.5">{{ $totalUserVerified }}</h2>
                    <p class="text-gray-400 truncate">
                        <span class="text-green-500 me-3"><i class="ri-shield-check-line"></i></span>
                        <span class="whitespace-nowrap">Akun valid NIK</span>
                    </p>
                </div>
                <div class="shrink">
                    <div class="text-5xl text-green-500"><i class="ri-user-follow-line"></i></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Card: Akun Belum Terverifikasi -->
    <div class="card">
        <div class="p-6">
            <div class="flex justify-between">
                <div class="grow overflow-hidden">
                    <h5 class="uppercase text-sm mt-0 truncate" title="Akun Belum Terverifikasi">Belum Verifikasi</h5>
                    <h2 class="text-3xl my-3 py-0.5">{{ $totalUserUnverified }}</h2>
                    <p class="text-gray-400 truncate">
                        <span class="text-red-500 me-3"><i class="ri-error-warning-line"></i></span>
                        <span class="whitespace-nowrap">NIK belum divalidasi</span>
                    </p>
                </div>
                <div class="shrink">
                    <div class="text-5xl text-red-500"><i class="ri-user-unfollow-line"></i></div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Row 3 -->
<div class="grid xl:grid-cols-2 lg:grid-cols-2 grid-cols-1 gap-6 mb-6">
    <!-- Chart Statistik Jenis Kelamin -->
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Statistik Jenis Kelamin</h4>
            <div dir="ltr">
                <div 
                    id="jenis-kelamin"
                    class="apex-charts"
                    data-colors="#3e60d5,#fa5c7c"
                    data-values="{{ json_encode([$jumlahLaki, $jumlahPerempuan]) }}"
                    data-labels="{{ json_encode(['Laki-laki', 'Perempuan']) }}"
                ></div>
            </div>
        </div>
    </div> <!-- card-end -->

    <!-- Chart Distribusi Usia Warga -->
    <div class="card">
        <div class="p-6">
            <h4 class="card-title mb-4">Distribusi Usia Warga RT.36</h4>
            <div dir="ltr">
                <div 
                    id="usia-warga"
                    class="apex-charts"
                    data-colors="#3e60d5,#47ad77,#ffc107,#dc3545"
                    data-values="{{ json_encode($usiaValues) }}"
                    data-labels="{{ json_encode($usiaLabels) }}"
                ></div>
            </div>
        </div>
    </div> <!-- card-end -->
</div>

<!-- Row 4 -->
<div class="grid grid-cols-12 gap-6 mb-6">
    <!-- Chart Tren Pengajuan Surat -->
    <div class="col-span-12 lg:col-span-7">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Tren Pengajuan Surat (12 Bulan)</h4>
                <div dir="ltr">
                    <div
                        id="tren-pengajuan-surat-line"
                        class="apex-charts"
                        data-colors="#3e60d5"
                        data-labels='@json($bulanLabels)'
                        data-values='@json($bulanData)'
                    ></div>
                </div>
            </div>
        </div> <!-- card-end -->
    </div>
    <div class="col-span-12 lg:col-span-5">
        <div class="card">
            <div class="p-6">
                <h4 class="card-title mb-4">Status Pengajuan Surat</h4>
                <div dir="ltr">
                    <div
                        id="status-pengajuan-surat-bar"
                        class="apex-charts"
                        data-sedang="{{ $statusVerifikasi }}"
                        data-selesai="{{ $statusSelesai }}"
                        data-ditolak="{{ $statusDitolak }}"
                    ></div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end row -->

@endsection

@section('script')
@vite(['resources/js/pages/jenis-kelamin.js'])
@vite(['resources/js/pages/usia-warga.js'])
@vite(['resources/js/pages/tren-pengajuan-surat.js'])
@vite(['resources/js/pages/status-pengajuan-surat.js'])
@endsection
