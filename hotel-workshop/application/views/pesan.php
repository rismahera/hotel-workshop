<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Diri Anda</title>
  
</head>
<body align="center">
    <center>
    <style>
      fieldset{
            width: 600px;
      }
  </style>
  <fieldset>
      <br>
      <br>
  <h4>Masukkan Data Diri Anda</h4>
  <br>
  <br>
    <form action="<?= base_url('pesan/save')?>" method="post">
    <table class="table">
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><input type="text" name="nama_depan"></td>
        </tr>
        <tr>
            <td>Nama Tengah</td>
            <td>:</td>
            <td><input type="text" name="nama_tengah"></td>
        </tr>
        
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="nama_belakang"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" id="" cols="35" rows="5"></textarea></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="kota"></td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>:</td>
            <td><input type="text" name="provinsi"></td>
        </tr>
        <tr>
            <td>Negara</td>
            <td>:</td>
            <td><input type="text" name="negara"></td>
        </tr>
        <tr>
            <td>No Identitas</td>
            <td>:</td>
            <td><input type="text" name="no_identitas"></td>
        </tr>
        <tr>
            <td>No telepon</td>
            <td>:</td>
            <td><input type="number" name="no_tlp"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="email"></td>
        </tr>
        

        </table>
        <button name="simpan">simpan</button>
    </form>
  </fieldset>
    </center>
</body>
</html>