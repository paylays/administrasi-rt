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
                    <td>: <input type="text" style="width:30px" name="nomor_surat">/RT. 036/GSM/<input type="text" style="width: 20px" name="bulan">/2024</td>
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
                Balikpapan, <input type="text" style="width:120px" name="tanggal">2024<br>
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


        <div class="content">
            <p>Bersama ini kami hadapkan seorang warga yang tersebut dibawah ini :</p>
            
            <table>
                <tr>
                    <td width="150">Nama</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Tempat tgl. Lahir</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Status Perkawinan</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Golongan Darah</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Kewarganegaraan</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td valign="top">Alamat</td>
                    <td>:</td>
                </tr>
            </table>

            <p>Bermaksud untuk mengurus :</p>
            
            <table class="checkbox-table" style="margin: 0px 22%; width:70%">
                <tr>
                    <td class="number-col">1.</td>
                    <td class="input-col">( <input type="text" class="input-box" name="checkbox1"> )</td>
                    <td>Surat Pengantar Nikah</td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>( <input type="text" class="input-box" name="checkbox2"> )</td>
                    <td>Surat Keterangan Belum Pernah Menikah</td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>( <input type="text" class="input-box" name="checkbox3"> )</td>
                    <td>Surat Keterangan Janda / Duda</td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>( <input type="text" class="input-box" name="checkbox4"> )</td>
                    <td>Surat Keterangan Penghasilan</td>
                </tr>
                <tr>
                    <td>5.</td>
                    <td>( <input type="text" class="input-box" name="checkbox5"> )</td>
                    <td>Surat Keterangan Beda Nama</td>
                </tr>
                <tr>
                    <td>6.</td>
                    <td>( <input type="text" class="input-box" name="checkbox6"> )</td>
                    <td>Surat Keterangan Ghoib</td>
                </tr>
                <tr>
                    <td>7.</td>
                    <td>( <input type="text" class="input-box" name="checkbox7"> )</td>
                    <td>Surat Bertempat Tinggal Sementara</td>
                </tr>
                <tr>
                    <td>8.</td>
                    <td>( <input type="text" class="input-box" name="checkbox8"> )</td>
                    <td>Surat Domisili Usaha Perusahaan</td>
                </tr>
                <tr>
                    <td>9.</td>
                    <td>( <input type="text" class="input-box" name="checkbox9"> )</td>
                    <td>Surat Keterangan Catatan Kepolisian (SKCK)</td>
                </tr>
                <tr>
                    <td>10.</td>
                    <td>( <input type="text" class="input-box" name="checkbox10"> )</td>
                    <td>Surat Keterangan Ahli Waris</td>
                </tr>
                <tr>
                    <td>11.</td>
                    <td>( <input type="text" class="input-box" name="checkbox11"> )</td>
                    <td>Surat Keterangan Kematian (Bagi yang meninggal NIK sudah tidak ada / sudah meninggal lama)</td>
                </tr>
                <tr>
                    <td>12.</td>
                    <td>( <input type="text" class="input-box" name="checkbox12"> )</td>
                    <td><input type="text" class="input-lainnya" name="lainnya"></td>
                </tr>
            </table>

            <p>Demikian Surat Pengantar ini diberikan untuk dipergunakan sebagaimana mestinya.</p>
        </div>

        <div class="signature">
            <p><b>KETUA RT. 036</b></p>
            <br><br><br>
            <p><b><span class="underline">H.</span> <span class="underline">SAMSU DUHA</span></b></p>
        </div>
    </div>
</body>
</html>