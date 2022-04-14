<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kamar</title>
</head>
<body>
    <br>
    <br>
    <br>
    <h5 align="center">FORMULIR EDIT KAMAR</h5>
    <form action="<?= base_url('kamar/editsimpan')?>" method ="POST">
        <table align="center">
            <tr>
                <td>No Kamar</td>
                <td>
                    <input type="hidden" name="id_kamar" value="<?= $kamar['id_kamar']?>">
                    <input type="text" name="nomor_kamar" class="form-control" value="<?= $kamar['nomor_kamar']?>">
                </td>
            </tr>
            <tr>
                <td>Id Jenis</td>
                <td>
                    <input type="text" name="id_jenis" class="form-control" value="<?= $kamar['id_jenis']?>">
                </td>
            </tr>
          
            <tr>
                <td><button name="simpan" class="btn btn-dark">SAVE</button></td>
            </tr>
        </table>
    </form>
</body>
</html>