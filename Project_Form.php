<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Form Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="styleprojecti.css">
</head>


<body div style="background-image: url('https://i.imgur.com/AFZrA5k.png');">
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
    <div class="card-body">
        <form action="Project_Muncul.php" method="post">
            <table border="4" cellpadding="5" cellspacing="0" width="1300" class="center">
                <tr>
                    <td colspan="2">
                        <h3>Registrasi Peserta Didik</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jenis Pendaftaran<span style=" color: red">*</span></label>
                    </td>
                    <td>
                        <select name="jenis_daftar" class="bar">
                            <option value="">Pilih :</option>
                            <option value="Siswa Baru">Siswa Baru</option>
                            <option value="Murid Pindahan">Murid Pindahan</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jalur Pendaftaran<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <select name="jalur_daftar" class="bar">
                            <option value="">Pilih :</option>
                            <option value="Zonasi">Zonasi</option>
                            <option value="Beasiswa">Beasiswa</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pilihan Jenjang<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <select name="pilih_jenjang" class="bar">
                            <option value="">Pilih :</option>
                            <option value="KB_A">KB A</option>
                            <option value="KB_B">KB B</option>
                            <option value="Paud">Paud</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Asal Sekolah<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="text" name="asal_sekolah" class="bar" maxlength="60" required><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Data Pribadi</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama Lengkap<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="text" name="nama_lengkap" class="bar" maxlength="60" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Jenis Kelamin<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>NIK<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="text" name="nik" maxlength="60" class="bar" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor KK<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="text" name="nomor_kk" maxlength="60" class="bar" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tempat Lahir<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="text" name="tempat_lahir" maxlength="60" class="bar" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Tanggal Lahir<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="date" name="tanggal_lahir" class="bar" required><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Agama<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <select name="agama" class="bar" required>
                            <option value="">Pilih :</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Katholik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                            <option value="konghucu">Kong Hu Cu</option>
                            <option value="lainnya">Lainnya</option>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Alamat Jalan<span style="color: red" required>*</span></label>
                    </td>
                    <td>
                        <textarea style="resize:none" name="alamat" cols="40" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor HP<span style="color: red" required>*</span></label>
                    </td>
                    <td>
                        <input type="text" name="nomor_hp" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Photo<span style="color: red" required>*</span></label>
                    </td>
                    <td>
                        <input type="file" name="photo" accept="image/png, image/jpeg" value="" /><br>
                        <small class="form-text text-muted">Foto harus JPG dan ukuran file maksimal 1 Mb</small>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Data Ayah Kandung</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama Ayah<span style="color: red" required>*</span></label>
                    </td>
                    <td>
                        <input type="text" name="nama_ayah" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pendidikan</label>
                    </td>
                    <td>
                        <input type="text" name="pendidikan_ayah" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pekerjaan</label>
                    </td>
                    <td>
                        <input type="text" name="pekerjaan_ayah" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor HP</label>
                    </td>
                    <td>
                        <input type="text" name="nomor_hp_ayah" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Data Ibu Kandung</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama Ibu<span style="color: red" required>*</span></label>
                    </td>
                    <td>
                        <input type="text" name="nama_ibu" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pendidikan</label>
                    </td>
                    <td>
                        <input type="text" name="pendidikan_ibu" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pekerjaan</label>
                    </td>
                    <td>
                        <input type="text" name="pekerjaan_ibu" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor HP</label>
                    </td>
                    <td>
                        <input type="text" name="nomor_hp_ibu" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <h3>Data Wali</h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nama Wali</label>
                    </td>
                    <td>
                        <input type="text" name="nama_wali" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pendidikan</label>
                    </td>
                    <td>
                        <input type="text" name="pendidikan_wali" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pekerjaan</label>
                    </td>
                    <td>
                        <input type="text" name="pekerjaan_wali" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Nomor HP</label>
                    </td>
                    <td>
                        <input type="text" name="nomor_hp_wali" maxlength="60" class="bar"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Pernyataan<span style="color: red">*</span></label>
                    </td>
                    <td>
                        <input type="checkbox" name="pernyataan" required>
                        Saya menyatakan dengan sesungguhnya bahwa isian data dalam formulir ini adalah benar.<br>
                        Apabila ternyata data tersebut tidak benar / palsu,<br>
                        maka saya bersedia menerima sanksi berupa Pembatalan sebagai Calon Peserta Didik
                    </td>
                </tr>
    </div>
    </table>
    <center>
        <?php
        $min_nomor = 1;
        $max_nomor = 15;

        $nomor_random1 = mt_rand($min_nomor, $max_nomor);
        $nomor_random2 = mt_rand($min_nomor, $max_nomor);
        ?>
        <div class="kapca">
            Selesaikan Captcha Dibawah Ini: <br>
        </div>
        <?php
        echo $nomor_random1 . ' + ' . $nomor_random2 . ' = ';
        ?>
        <input name="hasil_captcha" type="text" size="2" />

        <input name="nomor_pertama" type="hidden" value="<?php echo $nomor_random1; ?>" />
        <input name="nomor_kedua" type="hidden" value="<?php echo $nomor_random2; ?>" />
        <input type="submit" value="Submit">
    </center>
    </form>
</body>

</html>