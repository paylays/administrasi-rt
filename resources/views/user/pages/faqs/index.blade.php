@extends('user.layouts.vertical', ['title' => 'Faqs & Bantuan', 'subTitle' => 'Administrasi Surat' , 'pageTitle' => 'Faqs & Bantuan'])

@section("content")

<div class="card">
    <div class="p-6">
        <h4 class="card-title mb-1">Bantuan & Informasi Warga</h4>

        <div class="pt-5">
            <div class="border divide-y rounded-md dark:border-gray-700 dark:divide-gray-700" data-fc-type="accordion">

                <!-- Accordion item one -->
                <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                    <span>Saya tidak bisa mengajukan surat, kenapa?</span>
                    <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                </button> <!-- button end -->

                <div class="w-full overflow-hidden transition-[height] duration-300">
                    <div class="py-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                            Untuk dapat mengajukan surat, Anda harus <strong>terverifikasi berdasarkan NIK</strong> terlebih dahulu.
                            Pastikan data Anda telah sesuai dan valid. Jika proses verifikasi gagal atau data NIK Anda tidak ditemukan,
                            <strong>silakan hubungi Ketua RT</strong> melalui WhatsApp di nomor <a href="https://wa.me/6281234567890" target="_blank" class="text-primary underline">0812-3456-7890</a>.
                        </p>
                    </div>
                </div>

                <!-- Accordion item two -->
                <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                    <span>Di mana saya bisa melihat status atau riwayat pengajuan surat?</span>
                    <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                </button> <!-- button end -->

                <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="py-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                            Anda dapat melihat semua riwayat pengajuan surat melalui menu <strong>"Riwayat Surat"</strong> di sidebar dashboard.
                            Di sana Anda bisa melihat status terbaru dari setiap pengajuan seperti <em>Diproses</em>, <em>Disetujui</em>, atau <em>Ditolak</em>.
                        </p>
                    </div>
                </div>

                <!-- Accordion item three -->
                <button data-fc-type="collapse" class="fc-collapse-open:text-primary fc-collapse-open:bg-primary/10 py-2 px-5 inline-flex items-center justify-between gap-x-3 w-full text-sm font-medium text-left transition text-gray-500 dark:text-gray-200">
                    <span>Bagaimana cara mengajukan surat secara online?</span>
                    <span class="ri-arrow-down-s-line text-xl block transition-all fc-collapse-open:rotate-180"></span>
                </button> <!-- button end -->

                <div class="hidden w-full overflow-hidden transition-[height] duration-300">
                    <div class="py-4 px-5">
                        <p class="text-gray-800 dark:text-gray-200">
                            Untuk mengajukan surat:
                            <ol class="list-decimal ml-5 mt-2 space-y-1">
                                <li>Masuk ke dashboard warga menggunakan akun Anda.</li>
                                <li>Pilih menu <strong>"Pengajuan Surat"</strong>.</li>
                                <li>Pilih jenis surat yang dibutuhkan dan isi formulir sesuai data Anda.</li>
                                <li>Pastikan semua data sudah benar, lalu klik <strong>"Kirim Pengajuan"</strong>.</li>
                            </ol>
                        </p>
                    </div>
                </div>

            </div> <!-- accordion end -->
        </div>

    </div> <!-- card-body end -->
</div> <!-- card end -->

@endsection