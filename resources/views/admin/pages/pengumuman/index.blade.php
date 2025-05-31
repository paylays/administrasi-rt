@extends('admin.layouts.vertical', ['title' => 'Manajemen Pengumuman', 'subTitle' => 'Pengguna' , 'pageTitle' => 'Manajemen Pengumuman'])

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

        <!-- Tabel Manajemen Pengumuman -->

        <div class="justify-between items-center mb-4">
            <h3 class="card-title mb-4">Daftar Pengumuman</h3>
        </div>

        <div class="text-end mb-4">
            <a href="{{ route('admin.pengumuman.create') }}" class="btn bg-primary text-white">Tambah data</a>
        </div>

        <div class="overflow-x-auto">
            <div class="min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead>
                            <tr>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">No</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Judul</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Isi</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Cover</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Status</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Dibuat Oleh</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Tanggal Publish</th>
                                <th scope="col" class="px-2 py-2 text-start text-sm font-medium text-gray-500">Tanggal Kadaluwarsa</th>
                                <th scope="col" class="px-2 py-2 text-center text-sm font-medium text-gray-500">Action</th>
                            </tr>
                        </thead>

                        @php use Illuminate\Support\Str; @endphp
                        <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                            @forelse($pengumumans as $index => $item)
                                <tr>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $index + 1 }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">
                                        {{ Str::words($item->judul, 4, '...') }}
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">
                                        {{ Str::words(strip_tags($item->isi), 4, '...') }}
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">
                                        @if($item->cover)
                                            <img src="{{ asset('storage/' . $item->cover) }}" alt="Cover" class="w-24 h-auto rounded max-w-25px max-h-25px object-cover shadow">
                                        @else
                                            <span class="text-gray-400 italic">Tidak ada cover</span>
                                        @endif
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">
                                        @switch($item->status)
                                            @case('draft')
                                                <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-warning text-white">DRAFT</span>
                                                @break

                                            @case('published')
                                                <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-success text-white">PUBLISHED</span>
                                                @break

                                            @case('archived')
                                                <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-danger text-white">ARCHIVED</span>
                                                @break

                                            @default
                                                <span class="inline-flex items-center gap-1.5 py-0.5 px-1.5 rounded-md text-xs font-medium bg-dark text-white">{{ $item->status }}</span>
                                        @endswitch
                                    </td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->admin->name ?? '-' }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->tanggal_publish ? $item->tanggal_publish->translatedFormat('d F Y H:i') : '-' }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200">{{ $item->tanggal_kadaluwarsa ? $item->tanggal_kadaluwarsa->translatedFormat('d F Y H:i') : '-' }}</td>
                                    <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-700 dark:text-gray-200 text-center">
                                        <a href="javascript:void(0)" 
                                            class="open-detail-modal" 
                                            data-fc-target="user-detail-modal" 
                                            data-fc-type="modal"
                                            data-judul="{{ $item->judul }}"
                                            data-isi="{{ $item->isi }}"
                                            data-cover="{{ asset('storage/' . $item->cover) }}"
                                            data-status="{{ $item->status }}"
                                            data-tanggal_publish="{{ $item->tanggal_publish ? $item->tanggal_publish->format('d-m-Y') : '-' }}"
                                            data-tanggal_kadaluwarsa="{{ $item->tanggal_kadaluwarsa ? $item->tanggal_kadaluwarsa->format('d-m-Y') : '-' }}"
                                            >
                                            <i class="ri-file-info-fill text-xl text-info"></i>
                                        </a>
                                        <a href="{{ route('admin.pengumuman.edit', $item->id) }}"><i class="ri-edit-box-fill text-xl text-warning"></i></a>
                                        <a href="javascript:void(0)"
                                            class="open-delete-modal"
                                            data-fc-target="user-delete-modal"
                                            data-fc-type="modal"
                                            data-id="{{ $item->id }}"
                                            data-judul="{{ $item->judul }}">
                                            <i class="ri-delete-bin-2-fill text-xl text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-2 py-2 text-center text-sm text-gray-500 dark:text-gray-300">
                                        Tidak ada data pengumuman.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="mt-4 text-sm text-gray-600 dark:text-gray-300">
            Menampilkan total <span class="font-semibold">{{ $pengumumans->count() }}</span> data pengumuman.
        </p>
    </div>
</div>

@include('admin.pages.pengumuman.detail')

@include('admin.pages.pengumuman.delete')

@endsection

@section('script')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        
        // Detail Modal
        const detailButtons = document.querySelectorAll('.open-detail-modal');
        detailButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('detail-judul').textContent = this.dataset.judul;
                document.getElementById('detail-isi').textContent = this.dataset.isi;
                document.getElementById('detail-cover').textContent = this.dataset.cover;
                document.getElementById('detail-status').textContent = this.dataset.status;
                document.getElementById('detail-tanggal_publish').textContent = this.dataset.tanggal_publish;
                document.getElementById('detail-tanggal_kadaluwarsa').textContent = this.dataset.tanggal_kadaluwarsa;

                // Gambar cover
                const coverEl = document.getElementById('detail-cover');
                if (this.dataset.cover) {
                    coverEl.innerHTML = `<img src="${this.dataset.cover}" alt="Cover" class="w-32 h-auto rounded shadow max-w-full">`;
                } else {
                    coverEl.innerHTML = `<span class="text-gray-400 italic">Tidak ada cover</span>`;
                }

                // Status dengan badge
                const statusMap = {
                    draft: 'bg-yellow-500',
                    published: 'bg-green-600',
                    archived: 'bg-red-600'
                };
                const statusLabel = this.dataset.status?.toUpperCase() || '-';
                const statusColor = statusMap[this.dataset.status] || 'bg-gray-700';
                document.getElementById('detail-status').innerHTML = `<span class="inline-block px-2 py-1 rounded text-white text-xs ${statusColor}">${statusLabel}</span>`;
            });
        });

        // Delete Modal
        const deleteButtons = document.querySelectorAll('.open-delete-modal');
        const deleteForms = document.getElementById('delete-form');
        deleteButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('delete-id').value = this.dataset.id;
                document.getElementById('delete-judul').textContent = this.dataset.judul;

                deleteForms.action = `/admin/pengumuman/delete/${this.dataset.id}`;
            });
        });
    });
</script>

@endsection