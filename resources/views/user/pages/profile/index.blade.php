@extends('user.layouts.vertical', ['title' => 'Profil Say' , 'subTitle' => 'Pages', 'pageTitle' => 'Profil Say'])

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

@if ($errors->any())
    <div id="dismiss-example-error" class="border bg-red-500 text-white border-red-600 rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p class="flex-1">
            <span class="font-bold">Error!</span> - {{ $errors->first() }}
        </p>
        <button class="text-xl/[0]" onclick="document.getElementById('dismiss-example-error').remove()" type="button">
            <i class="ri-close-line text-xl"></i>
        </button>
    </div>
@endif

<div class="grid xl:grid-cols-12 lg:grid-cols-12 grid-cols-1 gap-6">
    <div class="xl:col-span-4 lg:col-span-5">

        @php
            use App\Models\Warga;
            $user = Auth::user();
            $nikValid = $user->nik && Warga::where('nik', $user->nik)->exists();
        @endphp

        <div class="card text-center p-6 mb-6">
            <div class="w-20 h-20 justify-center items-center flex bg-primary rounded-full p-1 mx-auto">
                <span class="text-white text-2xl">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
            </div>
            <h4 class="mb-1 mt-3 text-lg">{{ $user->name }}</h4>

            <div class="text-start mt-6">                
                <p class="text-zinc-400 mb-3"><strong>NIK :</strong> 
                    <span class="ms-2 {{ !$nikValid ? 'text-red-500 font-semibold underline' : '' }}">
                        @if ($nikValid)
                            {{ $user->nik }}
                            <i class="ri-checkbox-multiple-fill text-success ms-1" title="NIK Terverifikasi"></i>
                        @else
                            {{ $user->nik ?? 'NIK anda kosong.' }} Wajib verifikasi!
                        @endif
                    </span>
                </p> 
                
                <p class="text-zinc-400 mb-3"><strong>Name :</strong> <span class="ms-2">{{ $user->name }}</span>
                </p>

                <p class="text-zinc-400 mb-1.5"><strong>Email :</strong> <span class="ms-2 ">{{ $user->email }}</span>
                </p>

            </div>
        </div> <!-- end card -->
    </div>

    <div class="xl:col-span-8 lg:col-span-7">
        <div class="card p-6">
            <div data-fc-type="tab">
                <nav class="flex flex-wrap space-x-2 bg-light dark:bg-gray-700/60 mb-6" aria-label="Tabs"
                        role="tablist">
                    <button type="button"
                            class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-2 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-semibold text-gray-500 hover:text-primary dark:hover:text-gray-400 first:rounded-s-md last:rounded-e-md active"
                            data-fc-target="#fill-and-justify-1" aria-controls="fill-and-justify-1" role="tab">
                        Aktivitas
                    </button>
                    <button type="button"
                            class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-2 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-semibold text-gray-500 hover:text-primary dark:hover:text-gray-400 first:rounded-s-md last:rounded-e-md"
                            data-fc-target="#fill-and-justify-2" aria-controls="fill-and-justify-2" role="tab">
                        Ubah Profil
                    </button>
                    <button type="button"
                            class="fc-tab-active:bg-primary fc-tab-active:text-white flex-auto py-2 px-4 inline-flex justify-center items-center gap-2 bg-transparent text-center text-sm font-semibold text-gray-500 hover:text-primary dark:hover:text-gray-400 first:rounded-s-md last:rounded-e-md"
                            data-fc-target="#fill-and-justify-3" aria-controls="fill-and-justify-3" role="tab">
                        Verifikasi NIK
                    </button>
                </nav>

                <div class="mt-3">
                    <div id="fill-and-justify-1" role="tabpanel" aria-labelledby="fill-and-justify-item-1">
                        <h5 class="text-base uppercase mt-9 mb-2.5"><i class="ri-macbook-line me-1.5"></i>Test Aktivitas
                        </h5>

                        <div class="py-5 relative">
                            <div class="relative">
                                <div
                                    class="absolute bg-light bottom-0 left-[9px] top-5 w-0.5 z-0 dark:bg-gray-700"></div>
                                <i class="ri-record-circle-line float-left h-5 w-5 rounded-full border-2 border-transparent text-xs text-center leading-4 bg-info text-white"></i>
                                <div class="ms-8">
                                    <h5 class="text-base/none mb-1.5">Lead designer / Developer</h5>
                                    <p class="text-sm">websitename.com <span
                                            class="ms-3 text-xs">Year: 2015 - 18</span></p>
                                    <p class="text-gray-500 mt-3 pb-6">Everyone realizes why a new common language
                                        would be desirable: one could refuse to pay expensive translators.
                                        To achieve this, it would be necessary to have uniform grammar,
                                        pronunciation and more common words.
                                    </p>
                                </div>
                            </div>
                            <!-- timeline Designer/Devloper -->
                        </div>
                        <!-- end timeline -->
                    </div>

                    <div id="fill-and-justify-2" class="hidden" role="tabpanel" aria-labelledby="fill-and-justify-item-2">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        @php
                            $user = Auth::user();
                            $warga = $user->nik ? Warga::where('nik', $user->nik)->first() : null;
                            $isNameLocked = $warga && strtolower(trim($warga->nama_lengkap)) === strtolower(trim($user->name));
                        @endphp

                        <form action="{{ route('user.profile.update') }}" method="POST">
                                @csrf
    
                                <h5 class="mb-6 uppercase text-base"><i class="ri-contacts-book-2-line me-1.5"></i>
                                    Informasi Akun
                                </h5>
                                <div class="mb-4 space-y-2">
                                    <label for="name" class="font-semibold text-sm text-gray-500">Nama</label>
                                    <input type="text" class="form-input" name="name" id="name" value="{{ old('name', $user->name) }}" {{ $isNameLocked ? 'readonly' : '' }}>
                                </div>
                                <div class="mb-4 space-y-2">
                                    <label for="email" class="font-semibold text-sm text-gray-500">Email</label>
                                    <input type="text" class="form-input" name="email" id="email" value="{{ old('email', $user->email) }}">
                                </div>
                                <button type="submit" class="btn bg-success text-white mt-3"><i
                                        class="ri-save-line me-1"></i> Ubah Profil
                                </button>
                            </form>
    
                            <form action="{{ route('user.profile.update-password') }}" method="POST">
                                @csrf
    
                                <h5 class="mb-6 uppercase text-base"><i class="ri-contacts-book-2-line me-1.5"></i>
                                    Ubah Kata Sandi
                                </h5>
                                <div class="mb-4 space-y-2">
                                    <label for="current_password" class="font-semibold text-sm text-gray-500">Kata Sandi Lama</label>
                                    <input type="password" class="form-input" name="current_password" id="current_password">
                                </div>
                                <div class="mb-4 space-y-2">
                                    <label for="new_password" class="font-semibold text-sm text-gray-500">Kata Sandi Baru</label>
                                    <input type="password" class="form-input" name="new_password" id="new_password">
                                </div>
                                <div class="mb-4 space-y-2">
                                    <label for="confirm_password" class="font-semibold text-sm text-gray-500">Konfirmasi Kata Sandi Baru</label>
                                    <input type="password" class="form-input" name="new_password_confirmation" id="confirm_password">
                                </div>
                                <button type="submit" class="btn bg-success text-white mt-3"><i
                                        class="ri-save-line me-1"></i> Ubah Kata Sandi
                                </button>
                            </form>
                        </div>
                    </div>

                    <div id="fill-and-justify-3" class="hidden" role="tabpanel" aria-labelledby="fill-and-justify-item-3">
                        @php
                            $nikValid = $user->nik && Warga::where('nik', $user->nik)->exists();
                        @endphp

                        <form action="{{ route('user.profile.verify-nik') }}" method="POST">
                            @csrf
                            <div class="mb-6 space-y-2">
                                <label for="nik"  class="font-semibold text-sm text-gray-500">Verifikasi NIK</label>
                                <input type="text" class="form-input" id="nik" name="nik"
                                        placeholder="Masukkan nik anda" value="{{ old('nik') }}" {{ $nikValid ? 'disabled' : '' }}>
                                        
                                @if ($nikValid)
                                    <p class="text-sm text-success"><span>*</span> NIK anda sudah terverifikasi.</p>
                                @else
                                    <p class="text-sm text-danger"><span>*</span> NIK anda belum terverifikasi atau tidak ditemukan di database warga.</p>
                                @endif

                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn bg-success text-white mt-3" {{ $nikValid ? 'disabled' : '' }}><i
                                        class="ri-save-line me-1"></i> Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end card -->
    </div>
</div>

@endsection

@section('script')
    @vite('resources/js/pages/pages-profile.js')
@endsection
