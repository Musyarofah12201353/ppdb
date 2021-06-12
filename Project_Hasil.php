<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengumuman Seleksi</title>
    <link rel="stylesheet" type="text/css" href="styleprojecti.css">
    <script type="text/javascript">
        function message() {
            alert("Hasil belom Diumumkan")
        }
    </script>
</head>


<body div style="background-image: url('https://i.imgur.com/AFZrA5k.png');" onload="message()">
    <header>
        <div class="contener">
            <h1>Welcome</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="Project_Form.php">Pendaftaran</a></li>
                <li class="active"><a href="Project_Hasil.php">Hasil</a></li>
            </ul>
        </div>
    </header>
    <h3>
        Hasil Seleksi
    </h3>
    <h2 class="hasil">
        Pengumuman Hasil
    </h2>
    <p class="cs">Hubungi CS Kami dibawah ini</p>
    <?php
    $nama_nama = [
        "<h5>Musyarofah : 0812-1220-1353</h5>",
        "<h5>Kristian Rosady : 0858-1220-0580</h5>",
        "<h5>M Fikry Rizky : 0822-1220-0033</h5>"
    ];

    echo "<h2>Contact Person : </h2>";
    echo "<ul type = 'Square'>";
    foreach ($nama_nama as $nama_admin) {
        echo "<li>$nama_admin</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>