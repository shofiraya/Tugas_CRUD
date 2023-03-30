<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP dan MySQLi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
</head>
<body>
    <h2 class="text-center">Data Mahasiswa</h2>
    <br/>
    <a href="index.php" class="btn btn-info mb-3" style="margin-left: 50px; font-size: 24px;">Kembali</a>
    <br/>
    <br/>
    <h3 style="margin-left: 50px;">Input Data Mahasiswa</h3>
    <form method="post" action="tambah_aksi.php" style="margin-left: 50px; font-size: 24px;">
        <table>
            <tr>
                <td>NRP</td>
                <td><input type="number" name="nrp"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr>
                <td>Email Student</td>
                <td><input type="text" name="email_student"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="number" name="no_hp"></td>
            </tr>
            <tr>
                <td>Asal SMA</td>
                <td><input type="text" name="asal_sma"></td>
            </tr>
            <tr>
                <td>Mata Kuliah Favorit</td>
                <td><input type="text" name="matkul_favorit"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan" class="btn btn-success mb-3"></td>
            </tr>
        </table>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.table').DataTable();
        })
    </script>
    </div>

</body>
</html>