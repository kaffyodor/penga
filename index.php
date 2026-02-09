<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaduan Sekolah</title>
</head>
<body>
    <h1>Aspirasi</h1>

    <form action="proses.php" method="POST">
        <label for="">NIS</label>
        <input type="text" name="nis" placeholder="masukan NIS ...">
        <br>
        <label for="">kategori</label>
        <select name="kategori"> 
            <option disabled selected>Pilih Kategori...</option>
            <option value="1">sarana</option>
            <option value="2">Prasarana</option>
        </select>
        <br>
        <label for="">lokasi</label>
        <input type="text" name="lokasi" placeholder="masukan Lokasi ...">
        <br>
        <label for="">keterangan</label>
        <textarea name="ket" placeholder="masukan Keterangan..."></textarea>
        <br>
        <button type="submit">Kirim</button>
    </form>    
</body>
</html>