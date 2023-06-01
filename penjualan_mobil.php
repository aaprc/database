<?php
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
$result = mysqli_query($koneksi, "SELECT kwitansi.no_kwitansi, nama_pembeli, merk, harga
    from kwitansi, mobil, pembayaran
    where pembayaran.no_pembayaran = mobil.kode_mobil");

?>
<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8>
    <meta http-equiv="X-UA-Compatible" content= "IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Mobil</title>
</head>
<body>
    <title>REKAPTULASI RIS DEALER</title>
    <h1 align=center>RIS CAR DEALER</h1>
    <hr>
    <b>ABOUT RIS DEALER</b>
    <hr>
    <table style="width:50%">
    <tr>
        <th></th>
        <th></th>
        </tr>
        <tr>
            <td>Nama Dealer</td>
            <td>: RIS </td>
        </tr>
            <td>Alamat</td>
            <td>: Jalan Dokter Cipto No.121A</td>
        <tr>
            <td>Email</td>
            <td>: risdealer23@gmail.com </td>
        </tr>
            <tr>
            <td>NO HP</td>
            <td>: 085664842748</td>
        </tr>
       </table>
        <hr>
    <b>REKAPTULASI RIS DEALER</b>
        <hr>
    <table style="width:50%">
        </table>
    <table border="1" cellpaddings="8" cellspacing="0">
        <tr>
            <td>no_kwitansi</td>
            <td>nama_pembeli</td>
            <td>merk</td>
            <td>harga</td>
        </tr>
<?php while($row=mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row["no_kwitansi"]; ?></td>
            <td><?php echo $row["nama_pembeli"]; ?></td>
            <td><?php echo $row["merk"]; ?></td>
            <td><?php echo $row["harga"]; ?></td>
        </tr>
        <?php endwhile ?>
    </table>
</body>
</html>