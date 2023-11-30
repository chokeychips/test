<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Input Transaksi</h2>
        <form action="proses.php" method="POST" name="input-transaksi">
            <table rules="rows" border="1" cellpadding="3">
                <tr>
            <td><label>No Transaksi</label>
            <input type="text" name="no" placeholder="Isi no Transaksi" required /></td>
           </tr>
            <tr>
            <td><label>Kode Barang</label><br>
            <input type="radio" name="kd" value="B001" /> B001
            <input type="radio" name="kd" value="B002" /> B002
            <input type="radio" name="kd" value="B003" /> B003
            </td></tr>
<tr>
            <td><label>Status Barang</label><br>
            <input type="radio" name="status" value="Baru" /> Baru
            <input type="radio" name="status" value="Bekas" /> Bekas</td></tr>
<tr>
            <td><label>Jumlah Beli</label>
            <input type="number" name="jml" min=1 max=100 placeholder="Jumlah Beli"></td>
           <tr> 
            <td><input type="submit" class="btn-biru" name="simpan" value="Simpan">
            <input type="submit" class="btn-biru" name="batal" value="Batal"></td>
        </form>
    </div>
</body>
</html>


