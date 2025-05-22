@extends('admin.layouts.vertical', ['title' => 'Manajemen Pengumuman', 'subTitle' => 'Pengguna' , 'pageTitle' => 'Manajemen Pengumuman'])

@section("content")
@if($errors->any())
    <div id="dismiss-example-danger" class="border bg-danger text-white border-danger rounded-md py-3 px-5 flex justify-between items-center mb-3">
        <p>
            <span class="font-bold">Error!</span> - Terjadi kesalahan saat memperbarui data. Silahkan coba lagi. 
            {{ session('error') }}
        </p>
        <button class="text-xl/[0]" data-fc-dismiss="dismiss-example-danger" type="button">
            <i class="ri-close-line text-xl"></i>   
        </button>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Mengubah Pengumuman</h3>
    </div>

    <div class="p-6">
        <form action="{{ route('admin.pengumuman.update', $pengumuman->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mb-6">
                <div class="space-y-2">
                    <label for="judul" class="font-semibold text-gray-500">Judul</label>
                    <input class="form-input" type="text" id="judul" name="judul" value="{{ old('judul', $pengumuman->judul) }}">
                </div>
                <div class="space-y-2">
                    <label for="isi" class="font-semibold text-gray-500">Isi Pengumuman</label>
                    <textarea class="form-input" type="text" id="isi" name="isi" rows="2">{{ old('isi', $pengumuman->isi) }}</textarea>
                </div>
                <div class="space-y-2">
                    <label for="cover" class="font-semibold text-gray-500">Cover</label>
                    <input class="form-input" type="file" id="cover" name="cover" value="{{ old('cover', $pengumuman->cover) }}">
                </div>
                <div class="space-y-2">
                    <label for="status" class="font-semibold text-gray-500">Status</label>
                    <select class="form-input" name="status" id="status">
                        @foreach (['draft', 'published', 'archived'] as $hub)
                            <option value="{{ $hub }}" {{ old('status', $pengumuman->status) == $hub ? 'selected' : '' }}>{{ $hub }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex gap-2 justify-between items-center">
                <a href="{{ route('admin.pengumuman') }}" class="btn bg-gray-300 text-gray-800"><i class="ri-arrow-left-line text-sm me-1.5"></i>Kembali</a>
                <button type="submit" class="btn bg-primary text-white">Perbarui Data</button>
            </div>
        </form>
    </div>
</div>
@endsection