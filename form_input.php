<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body bgcolor="#ffffed">
<center><h2>Form Input Data Mahasiswa</h2>
    <form action="" method="post">
    <table rules="rows" border="1" bgcolor="#fc94af" cellpadding="3">
        <tr>
            <td><label for="nobp">No Bp</label></td>
            <td><input type="text"name="nobp" id="nobp" placeholder="Masukkan No BP" style="width:95%"></td>
        </tr>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td><input type="text"name="nama" id="nama" placeholder="Masukkan Nama" style="width:95%"></td>
        </tr>
        <tr>
            <td><label>Tanggal Lahir</label></td>
            <td><input type="date"name="tgllahir" style="width:95%"></td>
        </tr>
        <tr>
            <td><label>Jenis Kelamin</label></td>
            <td>
                <input type="radio"name="jk" value="Laki-laki" id="L">
                <label for="L">Laki-laki</label>
                <input type="radio"name="jk" value="Perempuan" id="P">
                <label for="P">Perempuan</label>
            </td>
        </tr>
        <tr>
        <td><label>Angkatan Mahasiswa</label></td>
            <td>
                <select name="angkatan">
                    <option>---Pilih---</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label>Hobi</label></td>
            <td>
                <input type="checkbox" name="hobi[]" value="Sepakbola" id="sepakbola">
                <label for="sepakbola">Sepakbola</label>
                <input type="checkbox" name="hobi[]" value="Membaca" id="membaca">
                <label for="membaca">Membaca</label>
                <input type="checkbox" name="hobi[]" value="Menyanyi" id="menyanyi">
                <label for="menyanyi">Menyanyi</label>
            </td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Simpan</button></td>
        </tr>
    </table>
    </form>
    <br>

    <?php if (isset($_POST['submit'])): ?>
<!-- isset berguna untuk memeriksa apakah sebuah variabel telah tersedia dan sudah diatur atau belum -->

        <h2>Tampilan Hasil</h2>
        <table border="1" cellspacing="0" cellpadding="3" bgcolor="#b2ac88">
            <tr>
                <td>No Bp</td>
                <td>:</td>
                <td><?php echo $_POST['nobp']; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $_POST['nama']; ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $_POST['tgllahir']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $_POST['jk']; ?></td>
            </tr>
            <tr>
                <td>Angkatan Mahasiswa</td>
                <td>:</td>
                <td><?php echo $_POST['angkatan']; ?></td>
            </tr><tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <?php
                    $count =count($_POST['hobi']);
                    for ($i=0; $i<$count; $i++){
                        echo$_POST['hobi'][$i].", ";
                    }
                     ?>
                </td>
            </tr>
        </table>
        <?php endif ?></center>
</body>
</html>