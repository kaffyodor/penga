<?php
include 'koneksi.php';

$query = "SELECT * FROM aspirasi";

$hasil = mysqli_query($koneksi , $query);
$row = [];

while ($rows = mysqli_fetch_assoc($hasil)) {
    $row[] = $rows;
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Sekolah | Umpan Balik</title>
</head>
<body>
    <h1>Umpan Balik</h1>
<?php foreach ($row as $r) : ?>
    <p>Aspirasi tentang sarana</p>
    <p>Nis : <?php echo $r['nis']; ?> </p>
    <p>Lokasi : </p>
    <p>Keterangan : </p>
    <p>Status : </p>
    <p>Feedback : </p>
    <?php endforeach ?>
</body>
</html>