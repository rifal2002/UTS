<?php
// Konfigurasi koneksi database
$servername = "localhost";
$username = ""; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "db_html"; // Ganti dengan nama database Anda

// Mendapatkan data dari form
$nama_negara = $_POST['nama_negara'];
$jumlah_pertandingan = $_POST['jumlah_pertandingan'];
$jumlah_menang = $_POST['jumlah_menang'];
$jumlah_seri = $_POST['jumlah_seri'];
$jumlah_kalah = $_POST['jumlah_kalah'];
$jumlah_poin = $_POST['jumlah_poin'];
$nama_operator = $_POST['nama_operator'];
$nim_mahasiswa = $_POST['nim_mahasiswa'];

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);


// Memasukkan data ke dalam tabel
$sql = "INSERT INTO DataPertandingan (namanegara, jumlahpertandingan, jumlahmenang, jumlahseri, jumlahkalah, jumlahpoin, namaoperator, nimmahasiswa) 
VALUES ('$namanegara', $jumlahpertandingan, $jumlahmenang, $jumlahseri, $jumlahkalah, $jumlahpoin, '$namaoperator', '$nimmahasiswa')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menampilkan output seperti yang diminta
echo "Data Group B Piala Asia Qatar U-23<br>";
echo "Per " . date("d M Y H:i:s") . " (Waktu dan Jam Sekarang)<br>";
echo "Nama Operator/NIM<br>";
echo "Negara | P | M | S | K | Poin<br>";

// Query untuk menampilkan data
$sql = "SELECT * FROM DataPertandingan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Menampilkan data row per row
    $counter = 1;
    while($row = $result->fetch_assoc()) {
        echo $counter . ". " . $row["NamaNegara"] . " | " . $row["JumlahPertandingan"] . " | " . $row["JumlahMenang"] . " | " . $row["JumlahSeri"] . " | " . $row["JumlahKalah"] . " | " . $row["JumlahPoin"] . "<br>";
        $counter++;
    }
} else {
    echo "0 results";
}

$conn->close();
?>
