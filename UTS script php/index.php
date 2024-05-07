<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Pertandingan</title>
</head>
<body>
    <h1>Input Data Pertandingan</h1>
    <form action="koneksi.php" method="post">
        <label for="nama_negara">Nama Negara:</label>
        <select name="nama_negara" id="nama_negara">
            <option value="Korea Selatan U-23">Korea Selatan U-23</option>
            <option value="Jepang U-23">Jepang U-23</option>
            <option value="Tiongkok U-23">Tiongkok U-23</option>
            <option value="Uni Emirat Arab U-23">Uni Emirat Arab U-23</option>
        </select><br>
        <label for="jumlah_pertandingan">Jumlah Pertandingan:</label>
        <input type="number" name="jumlah_pertandingan" id="jumlah_pertandingan"><br>
        <label for="jumlah_menang">Jumlah Menang:</label>
        <input type="number" name="jumlah_menang" id="jumlah_menang"><br>
        <label for="jumlah_seri">Jumlah Seri:</label>
        <input type="number" name="jumlah_seri" id="jumlah_seri"><br>
        <label for="jumlah_kalah">Jumlah Kalah:</label>
        <input type="number" name="jumlah_kalah" id="jumlah_kalah"><br>
        <label for="jumlah_poin">Jumlah Poin:</label>
        <input type="number" name="jumlah_poin" id="jumlah_poin"><br>
        <label for="nama_operator">Nama Operator:</label>
        <input type="text" name="nama_operator" id="nama_operator"><br>
        <label for="nim_mahasiswa">NIM Mahasiswa:</label>
        <input type="text" name="nim_mahasiswa" id="nim_mahasiswa"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
