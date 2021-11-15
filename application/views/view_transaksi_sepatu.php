<html>

<head>
  <title>Detail Transaksi Pembelian</title>
</head>

<body>
  <center>
    <table>
      <tr>
        <th colspan="3">Detail Transaksi Pembelian</th>
      </tr>

      <tr>
        <td colspan="3">
          <hr>
        </td>
      </tr>

      <tr>
        <th>Nama</th>
        <th>:</th>
        <td><?= $nama; ?></td>
      </tr>

      <tr>
        <th>Nomor Handphone</th>
        <th>:</th>
        <td><?= $nomor; ?></td>
      </tr>

      <tr>
        <th>Merk</th>
        <th>:</th>
        <td><?= $merk; ?></td>
      </tr>

      <tr>
        <th>Ukuran</th>
        <th>:</th>
        <td><?= $ukuran; ?></td>
      </tr>

      <tr>
        <th>Harga</th>
        <th>:</th>
        <td><?= $harga; ?></td>
      </tr>

      <tr>
        <td align="center" colspan="3">
          <a href="<?= base_url('sepatu'); ?>">Kembali</a>
        </td>
      </tr>
    </table>
  </center>
</body>

</html>