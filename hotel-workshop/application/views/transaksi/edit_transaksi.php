<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Transaksi</title>
</head>
<body>
    <br>
    <br>
    <br>
    <h5 align="center">FORMULIR EDIT USER</h5>
    <form action="<?= base_url('transaksi/simpan')?>" method ="POST">
        <table align="center">
           
            <tr>
                <td>Nomor Kamar</td>
                <td>
                    <input type="text" name="nomor_kamar" class="form-control" value="<?= $transaksi['nomor_kamar']?>">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="text" name="harga" class="form-control" value="<?= $transaksi['harga']?>">  
                </td>
            </tr>
            <tr>
                <td><button name="simpan" class="btn btn-dark">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
</html>