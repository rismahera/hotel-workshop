<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TAMBAH DATA USER</title>
</head>
<body>
    <br>
    <br>
    <br>
    <h3 align="center"> INPUT JENIS KAMAR</h3>
    <br>
    <div class="container">
    <form action="<?= base_url('jenis/save')?>" method="POST">
                <table align="center" class="table">
                    <tr>
                        <th><label>Nama Kamar</label></th>
                        <td><input type="text" name="kamar"></td>
                    </tr>
                    <tr>
                        <th><label>Keterangan</label></th>
                        <td><input type="text" name="keterangan" id="" cols="30" rows="10"></td>
                    </tr>
                    <tr>
                        <th><label>Harga</label></th>
                        <td><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <th><label>Foto</label></th>
                        <td><input type="text" name="foto"></td>
                    </tr>
                </table>
                <center><button name="simpan" class="btn btn-dark" >SAVE</button></center>
                
        </form>  
    </div>
    
</body>
</html>