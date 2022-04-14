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
  <h4>Silahkan Input Pesanan Anda</h4>
  <br>
  <br>
    <form action="<?= base_url('transaksi/tambah')?>" method="post">
    <table class="table">
        <tr>
            <td>Nama Kamar</td>
            <td>:</td>
            <td>
                <select name="kamar" id="">
                    <option value="">Single Room</option>
                    <option value="">Twin Room</option>
                    <option value="">Double Room</option>
                    <option value="">Family Room</option>
                    <option value="">Standar Room</option>
                    <option value="">Superior Room</option>
                    <option value="">Delux Room</option>
                    <option value="">Junior Suit</option>
                    <option value="">Suit Room</option>
                    <option value="">Predensial</option>
                    <option value="">Cabana Room</option>
                    <option value="">Vip Room</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Waktu Sewa</td>
            <td>:</td>
            <td><input  type="number" name="waktu_sewa" id="" cols="35" rows="5"></td>
        </tr>
        <tr>
            <td>Jenis Pembayaran</td>
            <td>:</td>
            <td>
                <select name="jenis_pembayaran" id="">
                    <option value="Bayar di tempat">Bayar Di Tempat</option>
                    <option value="Dana">Dana</option>
                </select>
            </td>
        </tr>
        </table>
        <button name="simpan">simpan</button>
    </form>
  </fieldset>
    </center>
</body>
</html>