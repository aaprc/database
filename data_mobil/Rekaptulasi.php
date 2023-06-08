<?php
$koneksi = mysqli_connect("localhost","root","","db_penjualan");
$result = mysqli_query($koneksi, "SELECT kwitansi.no_kwitansi, nama_pembeli, merk, harga
    from kwitansi, mobil, pembayaran
    where pembayaran.no_pembayaran = mobil.kode_mobil");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan Mobil</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br/>
    <br/>
    <br/>
<h1 align=center >RIS CAR DEALER</h1>
</body>
 <div class="wrapper">
        <div class="nav">
            <div class="logo">
            <a href="#">
                    <p>RIS DEALER</p>
                </a>
            </div> 
    <style>
        
        table {
            margin-top: 150px;
            margin-left: 475px;
            margin-right: 200px;
            margin-bottom: 500px;

            border-collapse: collapse;
            width: 0px;
            display : flex;
            justify.content : center;
            align-items : center ; 
        }
       

        th, td {
            padding: 6px;
            text-align: left;
            border-bottom: 3px solid black;
            border-top: 3px solid black;
            border-left: 3px solid black;
            border-right: 3px solid black;
          
        }
       
    </style>

</head>
<body>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    
     <title>REKAPTULASI RIS DEALER</title>
    <table align="center" border="1"  cellpaddings="10" cellspacing="0"> 
    
   
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
</div>
 <body>
<div class="wrapper">
        <div class="nav">
            <div class="logo">
            <a href="#">
                </a>
            </div> 
            <ul>
                <li Home class="nav-item">
                    <a class="nav-link" href="/ris_mobil/landing_page/Home.php">Home</a>
                </li>
                <li Rekaptulasi class="nav-item">
                    <a class="nav-link" href="/ris_mobil/data_mobil/Rekaptulasi.php">Rekaptulasi</a>
                </li>
                <li About class="nav-item">
                    <a class="nav-link" href="/ris_mobil/tentang_ris/About.php">About</a>
                </li>
                <li Contact Us class="nav-item">
                    <a class="nav-link" href="/ris_mobil/Contact_Us/Contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <div class="header">
       
        </div>
        </table>
    </body>
    </html>