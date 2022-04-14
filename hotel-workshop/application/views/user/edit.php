<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h5 align="center">FORMULIR EDIT USER</h5>
    <form action="<?= base_url('user/editsimpan')?>" method ="POST">
        <table align="center">
            <tr>
                <td>Username</td>
                <td>
                    <input type="hidden" name="id_user" value="<?= $user['id_user']?>">
                    <input type="text" name="username" class="form-control" value="<?= $user['username']?>">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" class="form-control" value="<?= $user['password']?>">
                </td>
            </tr>
            <tr>
                <td>Hak Akses</td>
                <td>
                    <select name="hak_akses" id="">
                        <option value="client">Client</option>
                        <option value="admin">Admin</option>
                    </select>
                   
                    
                </td>
            </tr>
            <tr>
                <td>Aktivasi</td>
                <td>
                    <select name="aktivasi" id="">
                        <option value="1">Masuk</option>
                        <option value="0">Tidak Masuk</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>No_hp</td>
                <td>
                    <input type="text" name="no_hp" class="form-control" value="<?= $user['no_hp']?>">
                </td>
            </tr>
            
            <tr>
                <td><button name="simpan" class="btn btn-dark">SAVE</button></td>
            </tr>
        </table>
    </form>
</body>
</html>