<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA KAMAR</title>
</head>
<body>
    <br>
    <br>
    <h3 align="center">FORMULIR INPUT KAMAR</h3>
    
        <form action="<?= base_url('kamar/save')?>" method="POST">
                <table align="center" >
                    <tr>
                        <td><label>No Kamar</label></td>
                        <td><input type="text" name="nomor_kamar"></td>
                    </tr>
                    <tr>
                        <td><label>Id Jenis</label></td>
                        <td><input type="MD5" name="id_jenis" id="" cols="30" rows="10"></td>
                    </tr>
                   
                    <tr>
                        <td><button name="simpan" class="btn btn-dark">SAVE</button></td>
                    </tr>
                </table>
                
        </form>
    
</body>
</html>