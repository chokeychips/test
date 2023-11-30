<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Input Data Transaksi</h2>
    <div class="form-section">
        <form action="proses.php" method="POST" name="input-transaksi">
            <label>No Transaksi</label>
            <input type="text" name="no" placeholder="Isi no Transaksi" required /> <br>
           

            <label>Kode Barang</label><br>
            <input type="radio" name="kd" value="B001" /> B001
            <input type="radio" name="kd" value="B002" /> B002
            <input type="radio" name="kd" value="B003" /> B003
            <br/>

            <label>Status Barang</label><br>
            <input type="radio" name="status" value="Baru" /> Baru
            <input type="radio" name="status" value="Bekas" /> Bekas <br/>

            <label>Jumlah Beli</label>
            <input type="number" name="jml" min=1 max=100 placeholder="Jumlah Beli"> <br>
            
            <input type="submit" class="btn-biru" name="simpan" value="Simpan">
            <input type="submit" class="btn-biru" name="batal" value="Batal">
        </form>

    </div>
</body>
</html>