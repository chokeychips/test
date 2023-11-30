<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Input Data Mahasiswa</title>
    <style>
        body {
            background-color: #ffffed;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.8); /* Efek blur dengan background putih */
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        h2 {
            color: #fc94af;
        }

        table {
            margin: 0 auto;
            border: 1px solid #fc94af;
            border-collapse: collapse;
            background-color: #ffffff;
            width: 100%;
            max-width: 400px;
        }

        table td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Hasil Input Data Mahasiswa</h2>
        <table border="1" cellspacing="0" cellpadding="3">
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
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <?php
                    $count = count($_POST['hobi']);
                    for ($i = 0; $i < $count; $i++) {
                        echo $_POST['hobi'][$i] . ", ";
                    }
                    ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
