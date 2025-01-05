<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "toko_rempah";

$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama_produk = $_POST['nama_produk'];
$jumlah_produk = $_POST['jumlah_produk'];
$nama_pembeli = $_POST['nama_pembeli'];
$alamat_pembeli = $_POST['alamat_pembeli'];
$no_hp = $_POST['no_hp'];

// Query untuk memasukkan data
$sql = "INSERT INTO pesanan (nama_produk, jumlah_produk, nama_pembeli, alamat_pembeli, no_hp)
        VALUES ('$nama_produk', $jumlah_produk, '$nama_pembeli', '$alamat_pembeli', '$no_hp')";

if ($conn->query($sql) === TRUE ) { 

    header("Location: toko.html");
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
 