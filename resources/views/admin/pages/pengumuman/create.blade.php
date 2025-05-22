@extends('admin.layouts.vertical', ['title' => 'Manajemen Pengumuman', 'subTitle' => 'Manajemen Data' , 'pageTitle' => 'Manajemen Pengumuman'])

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
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Form Menambah Pengumuman</h3>
    </div>

    <div class="p-6">
        <form method="POST" action="{{ route('admin.pengumuman.store') }}" enctype="multipart/form-data">
        @csrf
            <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mb-6">
                <div class="space-y-2">
                    <label for="judul" class="font-semibold text-gray-500">Judul<span class="text-danger">*</span></label>
                    <input class="form-input" type="text" id="judul" name="judul">
                </div>

                <div class="space-y-2">
                    <label for="isi" class="font-semibold text-gray-500">Isi Pengumuman<span class="text-danger">*</span></label>
                    <textarea class="form-input" type="text" id="isi" name="isi" rows="2"></textarea>
                </div>
                <div class="space-y-2">
                    <label for="cover" class="font-semibold text-gray-500">Cover<span class="text-danger"></span></label>
                    <input class="form-input" type="file" id="cover" name="cover">
                </div>
                <div class="space-y-2">
                    <label for="status" class="font-semibold text-gray-500">Status<span class="text-danger">*</span></label>
                    <select class="form-input" name="status" id="status">
                        <option value="">-- Pilih Status --</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                        <option value="archived">Archived</option>
                    </select>
                </div>
            </div>
            <div class="flex gap-2 justify-between items-center">
                <a href="{{ route('admin.pengumuman') }}" class="btn bg-light text-gray-800"><i class="ri-arrow-left-line text-sm me-1.5"></i>Kembali</a>
                <button type="submit" class="btn bg-primary text-white">Tambah Sekarang</button>
            </div>
        </form>
    </div>
@endsection