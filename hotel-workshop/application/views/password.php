<br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ubah Password</title>
</head>

<body>
    <div class="container">
    <h5 align="center">FORMULIR UBAH PASSWORD</h5>
    <form action="<?= base_url('Ubah/proses_gantipassword')?>" method ="POST">
        <table align="center" class="table">
            <tr>
                <th>Username</th>
                <td>:</td>
                <td>
                    <input type="text" name="username" class="form-control" >
                </td>
            </tr>
            <tr>
                <th> Password Baru</th>
                <td>:</td>
                <td>
                    <input type="password" name="password1" class="form-control" >
                </td>
            </tr>
            <tr>
                <th>Konfirmasi password </th>
                <td>:</td>
                <td>
                    <input type="password" name="password2" class="form-control">
                </td>
            </tr>
            
            <tr>
                <td><button name="simpan" class="btn btn-primary">SIMPAN</button></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>