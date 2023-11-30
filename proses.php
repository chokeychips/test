<?php 
    if (isset($_POST["simpan"])) //Jika tombol simpan di klik

    {
// Mengambil data dari form dan ditampung dalam variabel
$no          = strip_tags($_POST["no"]);

$kd          = strip_tags($_POST["kd"]);
$jml         = strip_tags($_POST["jml"]);
$status      = strip_tags($_POST["status"]);

// mengambil data dari form dan ditampung dalam variabel
//menentukan nama mahasiswa

    if ($kd=="B001")
{
    $nm_brg="Barang 1";
    if ($status=="Baru")
    $harga=1000000;
    else
    $harga=500000;
}
elseif($kd=="B002")
{
    $nm_brg="Barang 2";
    if ($status=="Baru")
    $harga=2000000;
    else
    $harga=1000000;
}
else
{
    $nm_brg="Barang 3";
    if ($status=="Baru")
    $harga=3000000;
    else
    $harga=1500000;
}

// menentukan nama barang dan harga barang sesuai soal
if ($status=="Bekas" && $jml >=5){
    $diskon = 200000;
}
else
{
    $diskon=0;
}
// Mencari Potongan Harga
$total_harga = $harga * $jml;
$total_bayar = $total_harga - $diskon;
    

 // jika tombol simpan belum di klik (url langsung di akses melalui proses.php)

    } // akhir if isset

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Proses Form</title>
</head>
<style>
</style>
<body bgcolor="#ffffed">
    <center><h2>Laporan Data Barang</h2></center>
    <div id="laporan">
        <table border="1" bgcolor="white" width="80%" align="center" cellspacing="0" cellpadding="7">
            <tr>
                <td>No Transaksi</td>
                <td>: <?php echo $no;?></td>
            </tr>

           
            <tr>
                <td>Kode / Nama Barang</td>
                <td>: <?php echo $kd.'-'.$nm_brg;?></td>
            </tr>

            <tr>
                <td>Harga Barang/Unit</td>
                <td>: Rp. <?php echo number_format ($harga,0,",",".");?></td>
            </tr>

            <tr>
                <td>Jumlah Beli</td>
                <td>: <?php echo $jml;?> Unit </td>
            </tr>

            <tr>
                <td>Total Harga</td>
                <td>: Rp. <?php echo number_format ($total_harga,0,",",".");?></td>
            </tr>

            <tr>
                <td>Potongan Harga</td>
                <td>: Rp. <?php echo number_format ($diskon,0,",",".");?></td>
            </tr>
 
            <tr>
                <td>Total Bayar</td>
                <td>: Rp. <?php echo number_format ($total_bayar,0,",",".");?></td>
            </tr>
            <tr>
                <td colspan ="2" align="right"> Padang,<?php echo date ("d-F-Y");?> <p>Terima Kasih</p></td>
            </tr>

            <tr>
                <td colspan="2" align="center" ><a href="form_input_css.php">Cetak</a></td>
            </tr>
 </div>
        </table>

    
</body>
</html>