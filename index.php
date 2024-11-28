<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> <!-- Untuk Manggil CSS nya -->
    <title>Form Input</title>
</head>
<body>
    <!-- Form Input Menggunakan HTML pada Umumnya -->
    <h2>Form Input Data</h2>
    <form method="POST" action="">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label><br>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" required><br><br>

        <label for="pekerjaan">Pekerjaan:</label><br>
        <select id="pekerjaan" name="pekerjaan" required>
            <option value="Programmer">Programmer</option>
            <option value="Desainer">Desainer</option>
            <option value="Manajer">Manajer</option>
            <option value="Marketing">Marketing</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
    <footer>Tugas WEB PHP Muhammad Faizal Dengan NIM 312310551 Fakultas Tekhnik Prodi Tekhnik Informatika</footer>
    <?php
    //Variabel yang akan dipanggil
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
        $pekerjaan = htmlspecialchars($_POST['pekerjaan']);

        //Variabel Menghitung umur
        $lahir = new DateTime($tanggal_lahir);
        $sekarang = new DateTime();
        $umur = $sekarang->diff($lahir)->y;

        //Variabel Menentukan gaji berdasarkan pekerjaan
        $gaji = 0;
        switch ($pekerjaan) {
            case 'Programmer':
                $gaji = 10000000; // Gaji Programmer
                break;
            case 'Desainer':
                $gaji = 8000000; // Gaji Desainer
                break;
            case 'Manajer':
                $gaji = 15000000; // Gaji Manajer
                break;
            case 'Marketing':
                $gaji = 7000000; // Gaji Marketing
                break;
        }

        // Menampilkan output
        // echo berfungsi untuk memanggil variabel yang sudah kita buat seperti nama dll
        echo "<h3>Output:</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Pekerjaan: " . $pekerjaan . "<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.') . ",-<br>";
    }
    ?>
</body>
</html>