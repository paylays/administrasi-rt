<!DOCTYPE html>
<html lang="id">
<head>
    <title>Surat Pengantar RT</title>
    <style>
       @page {
    size: 21cm 33cm portrait;
}
    html,body {
    width: 15.92cm;
    height: 31cm;
    margin: 0.5cm 2.54cm 2.54cm 2.54cm;
    padding: 1cm;
}
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.5;
    display: flex;
    justify-content: center;
    font-size: 11pt;
}

.header {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
    border-bottom: 4px solid black;
    padding-bottom: 10px;
}

.header-text {
    font-weight: bold;
    margin: 0;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
}

td {
    vertical-align: top;
    padding: 3px 0;
}

input {
    height: 12pt;
    border: none;
    border-bottom: 2px black dotted;
    vertical-align: baseline;
    font-family: Arial, sans-serif;
    font-size: 12pt;
}

input:focus {
    outline: none;
    border: none;
}

.checkbox-table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, serif;
    font-size: 16px;
}

.number-col {
    width: 30px;
}

.input-col {
    width: 60px;
}

.input-box {
    width: 20px;
    text-align: center;
}

.input-lainnya {
    width: 350px;
}

.underline {
    text-decoration: underline;
}

.content {
    margin-bottom: 20px;
}

.signature {
    margin-top: 30px;
    text-align: center;
    width: 200px;
    float: right;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="header" style="border-bottom: 4px solid black; padding-bottom: 10px; margin-bottom: 20px;">
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <td style="width: 85px; vertical-align: top;">
                <img src="{{ public_path('images/balikpapan.png') }}" width="85" height="85" alt="Logo Kiri">
            </td>
            <td style="text-align: center; vertical-align: middle; font-family: Arial, sans-serif;">
                <p style="margin: 0; font-weight: bold;">KECAMATAN BALIKPAPAN UTARA</p>
                <p style="margin: 0; font-weight: bold;">KELURAHAN GUNUNG SAMARINDA</p>
                <p style="margin: 0; font-weight: bold; font-size: 20pt;">RUKUN TETANGGA 036</p>
                <p style="margin: 0; font-weight: bold;">Alamat : Jl. Wonorejo Gg Masjid Baiturrahim No.062 HP.0811542884, 082157280540</p>
                <p style="margin: 0; font-weight: bold;">KODEPOS :76125</p>
            </td>
            <td style="width: 85px; vertical-align: top; text-align: right;">
                <img src="{{ public_path('images/beruang.png') }}" width="85" height="85" alt="Logo Kanan">
            </td>
        </tr>
    </table>
</div>


<table style="width: 100%; font-weight: bold; margin-bottom: 20px;">
    <tr>
        <td style="vertical-align: top; width: 60%;">
            <table>
                <tr>
                    <td style="width: 60px;">Nomor</td>
                    <td>: {{ $pengajuan->nomor_surat ?? '__________/RT.036/GSM/__/2025' }}</td>
                </tr>
                <tr>
                    <td>Lampiran</td>
                    <td>: 1 ( Satu Berkas )</td>
                </tr>
                <tr>
                    <td>Perihal</td>
                    <td>: <span style="text-decoration: underline;">Surat Pengantar</span></td>
                </tr>
            </table>
        </td>
        <td style="vertical-align: top;">
    <table>
        <tr>
            <td style="vertical-align: top;">
                Balikpapan, {{ $tanggalSurat ?? '__________' }}<br>
                Kepada Yth,<br>
                Lurah Gunung Samarinda<br>
                Di-<br>
                <span style="margin-left:60px;">Balikpapan</span>
            </td>
        </tr>
    </table>
</td>

    </tr>
</table>

        @php
            use Carbon\Carbon;
            $tanggal_lahir = isset($dataPengajuan['tanggal_lahir']) ? Carbon::parse($dataPengajuan['tanggal_lahir'])->translatedFormat('j F Y') : '-';

            $keperluanSurat = $dataPengajuan['keperluan_surat'] ?? [];
            if (is_string($keperluanSurat)) {
                $keperluanSurat = json_decode($keperluanSurat, true) ?? [];
            }
        @endphp


        <div class="content">
            <p>Bersama ini kami hadapkan seorang warga yang tersebut dibawah ini :</p>
            
        <table>
            <tr>
                <td width="150">Nama</td>
                <td>: {{ $dataPengajuan['nama'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>: {{ $dataPengajuan['jenis_kelamin'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Tempat tgl. Lahir</td>
                <td>: {{ ($dataPengajuan['tempat_lahir'] ?? '-') . ', ' . $tanggal_lahir }}</td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td>: {{ $dataPengajuan['status_perkawinan'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Golongan Darah</td>
                <td>: {{ $dataPengajuan['golongan_darah'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Kewarganegaraan</td>
                <td>: {{ $dataPengajuan['kewarganegaraan'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td>: {{ $dataPengajuan['pekerjaan'] ?? '-' }}</td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>: {{ $dataPengajuan['agama'] ?? '-' }}</td>
            </tr>
            <tr>
                <td valign="top">Alamat</td>
                <td>: {{ $dataPengajuan['alamat'] ?? '-' }}</td>
            </tr>
        </table>

            <p>Bermaksud untuk mengurus :</p>

        <table class="checkbox-table" style="margin: 0px 22%; width:70%">
            @php
                $allKeperluan = [
                    'Surat Pengantar Nikah',
                    'Surat Keterangan Belum Pernah Menikah',
                    'Surat Keterangan Janda / Duda',
                    'Surat Keterangan Penghasilan',
                    'Surat Keterangan Beda Nama',
                    'Surat Keterangan Ghoib',
                    'Surat Bertempat Tinggal Sementara',
                    'Surat Domisili Usaha Perusahaan',
                    'Surat Keterangan Catatan Kepolisian (SKCK)',
                    'Surat Keterangan Ahli Waris',
                    'Surat Keterangan Kematian (Bagi yang meninggal NIK sudah tidak ada / sudah meninggal lama)',
                ];
            @endphp

            @foreach ($allKeperluan as $index => $keperluan)
                <tr>
                    <td class="number-col">{{ $index + 1 }}.</td>
                    <td class="input-col">
                        ( <input type="checkbox" disabled
                            @if(in_array($keperluan, $keperluanSurat)) checked @endif
                        > )
                    </td>
                    <td>{{ $keperluan }}</td>
                </tr>
            @endforeach

            <tr>
                <td>12.</td>
                <td>( )</td>
                <td><input type="text" class="input-lainnya" name="lainnya" disabled></td>
            </tr>
        </table>

            <p>Demikian Surat Pengantar ini diberikan untuk dipergunakan sebagaimana mestinya.</p>
        </div>

        <div class="signature">
            <p><b>KETUA RT. 036</b></p>
            <br><br><br>
            @if($pengajuan->file_ttd)
                <img src="{{ public_path('storage/' . $pengajuan->file_ttd) }}" alt="Tanda Tangan" style="height: 200px;">
            @endif
            <p><b><span class="underline">H.</span> <span class="underline">SAMSU DUHA</span></b></p>
        </div>
    </div>
</body>
</html>