<?php

include 'koneksi.php';

$nis = $_POST['nis'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$ket = $_POST['ket'];
$status = 'menunggu';
$feedback = 'Terimakasih atas aspirasi anda';

$query = "INSERT INTO aspirasi (nis, id_kategori, lokasi, ket, status, feedback) 
          VALUES ('$nis', '$kategori', '$lokasi', '$ket', '$status', '$feedback')
         ";

if (mysqli_query($koneksi, $query)) {
    echo "<script>
        alert('Data Berhasil Dikirim!');
        window.location.href = 'umpanbalik.php';
        </script>";
} else {
    echo "Error: ". $query. "<br>" . mysqli_error($koneksi);
}
