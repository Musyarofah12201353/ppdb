<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styleprojecti.css">
    <title>Registrasi Form Pendaftaran Siswa Baru</title>
</head>

<body div style="background-image: url('https://i.imgur.com/AFZrA5k.png');">
    <?php
    $nama = $_POST['nama_lengkap'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_daftar = $_POST['jenis_daftar'];
    $jalur_daftar = $_POST['jalur_daftar'];
    $pilih_jenjang = $_POST['pilih_jenjang'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nik = $_POST['nik'];
    $nomor_kk = $_POST['nomor_kk'];
    $agama = $_POST['agama'];
    $nomor_hp = $_POST['nomor_hp'];
    $photo = $_POST['photo'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $nama_wali = $_POST['nama_wali'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pendidikan_wali = $_POST['pendidikan_wali'];
    $nomor_hp_ayah = $_POST['nomor_hp_ayah'];
    $nomor_hp_ibu = $_POST['nomor_hp_ibu'];
    $nomor_hp_wali = $_POST['nomor_hp_wali'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $pernyataan = $_POST['pernyataan'];
    ?>
    <header>
        <div class="contener">
            <h1>Welcome</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="Project_Form.php">Pendaftaran</a></li>
                <li><a href="Project_Hasil.php">Hasil</a></li>
            </ul>
        </div>
    </header>
    <h2>Data Registrasi</h2>
    <table border="1" cellpadding="7" cellspacing="0" width="1000">
        <tr>
            <td colspan="2">
                <h3>Registrasi Peserta Didik</h3>
            </td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td style="width:70%;max-width: 100px;"><?= $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td style="width:70%;max-width: 100px;"><?= $jk ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td style="width:70%;max-width: 100px;"><?= $nik ?></td>
        </tr>
        <tr>
            <td>Nomor KK</td>
            <td style="width:70%;max-width: 100px;"><?= $nomor_kk ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td style="width:70%;max-width: 100px;"><?= $tempat_lahir ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td style="width:70%;max-width: 100px;"><?= $tanggal_lahir ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td style="width:70%;max-width: 100px;"><?= $agama ?></td>
        </tr>
        <tr>
            <td>Alamat Jalan</td>
            <td style="width:70%;max-width: 100px;"><?= $alamat ?></td>
        </tr>
        <tr>
            <td>Nomor Hp</td>
            <td style="width:70%;max-width: 100px;"><?= $nomor_hp ?></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td style="width:70%;max-width: 100px;"><?= $photo ?></td>
        </tr>
        <tr>
            <td>Jenis Pendaftaran</td>
            <td style="width:70%;max-width: 100px;"><?= $jenis_daftar ?></td>
        </tr>
        <tr>
            <td>Jalur Pendaftaran</td>
            <td style="width:70%;max-width: 100px;"><?= $jalur_daftar ?></td>
        </tr>
        <tr>
            <td>Pilihan Jenjang</td>
            <td style="width:70%;max-width: 100px;"><?= $pilih_jenjang ?></td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td style="width:70%;max-width: 100px;"><?= $asal_sekolah ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>Data Ayah Kandung</h3>
            </td>
        </tr>
        <tr>
            <td>Nama Ayah</td>
            <td style="width:70%;max-width: 100px;"><?= $nama_ayah ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td style="width:70%;max-width: 100px;"><?= $pendidikan_ayah ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td style="width:70%;max-width: 100px;"><?= $pekerjaan_ayah ?></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td style="width:70%;max-width: 100px;"><?= $nomor_hp_ayah ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>Data Ibu Kandung</h3>
            </td>
        </tr>
        <tr>
            <td>Nama Ibu</td>
            <td style="width:70%;max-width: 100px;"><?= $nama_ibu ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td style="width:70%;max-width: 100px;"><?= $pendidikan_ibu ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td style="width:70%;max-width: 100px;"><?= $pekerjaan_ibu ?></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td style="width:70%;max-width: 100px;"><?= $nomor_hp_ibu ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <h3>Data Wali Kandung</h3>
            </td>
        </tr>
        <tr>
            <td>Nama Wali</td>
            <td style="width:70%;max-width: 100px;"><?= $nama_wali ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            <td style="width:70%;max-width: 100px;"><?= $pendidikan_wali ?></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td style="width:70%;max-width: 100px;"><?= $pekerjaan_wali ?></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td style="width:70%;max-width: 100px;"><?= $nomor_hp_wali ?></td>
        </tr>
    </table>
    <?php
    $hasil_captcha = $_POST["hasil_captcha"];
    $nomor_random1 = $_POST["nomor_pertama"];
    $nomor_random2 = $_POST["nomor_kedua"];

    $total_angka = $nomor_random1 + $nomor_random2;

    if ($hasil_captcha == $total_angka) {
        echo '<p class="selesai_daftar">
        Siswa Sudah Didaftarkan, Kami Akan Memproses Biodata Anda.
    </p>
    <div class="contener">
        <a href="index.php" target="_self" class="backhome"><u>Back to Home</a></u>
    </div>';
    } else {
        echo '<h2 class="captcha_salah">Captcha Salah<h2><br>
        <a href="Project_Form.php" target="_blank" class="wrong_cap"><br><u>Back to Form<u></h2></a>';
    }
    ?>

</body>

</html>