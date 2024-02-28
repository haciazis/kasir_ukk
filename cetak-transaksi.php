
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplikasi Kasir</title>
  <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <div class="p-4 main-content">
          
          <div class="card col-6">
            <div class="card-body">
              <p style="text-align: center">Resto Malabar</p>
            ============================
        <?php
            include("koneksi/koneksi.php");

            $sql = $con->query("SELECT * FROM penjualan ORDER BY PenjualanID DESC LIMIT 1");
            while ($data= $sql->fetch_assoc()) {
        ?>
               <p>ID Transaksi: <?php echo $data['PenjualanID']?></p>
                <p>Tanggal Transaksi: <?php echo $data['TanggalPenjualan']?></p>
                
                <?php
                    $sql2 = $con->query("SELECT * FROM pelanggan WHERE PelangganID = '".$data['PenjualanID']."'");
                    while ($data2= $sql2->fetch_assoc()) { ?>
                      <p>Nama Pemesan: <?php echo $data2['NamaPelanggan'];?></p>
                      <P>NoMeja: <?php echo $data2['Nomeja'];?></p>
                    <?php } ?>
                    <tr>
                      ============================
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th class="col-1">Jumlah</th>
                                <th class="col-1">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                          
$sql3 = $con->query("SELECT * FROM detailpenjualan WHERE DetailID = '" . $data['PenjualanID'] . "'");
                            
                          $totalharga = 0;

                          while ($data3= $sql3->fetch_assoc()) {
                        ?>
                            <tr>
                              <td>
                              <?php
$sql4 = $con->query("SELECT * FROM produk WHERE ProdukID = '" . $data3['ProdukID'] . "' ");
                                while ($data4= $sql4->fetch_assoc()) {
                                    echo $data4['NamaProduk'];
                                }
                              ?>
                              </td>
                              <td><?php echo $data3['JumlahProduk']?> Pcs</td>
                              <td>RP.<?php echo number_format($data3['Subtotal']) ?></td>
                             
                            </tr>

                            <?php
                  $totalproduk = $data3['JumlahProduk'] * $data3['Subtotal'];
                              $totalharga += $totalproduk;
                            }
                            ?>

                            <tr>
                            <td colspan='2'><strong>Total Harga:</strong></td>
                            <td colspan='2'><strong>RP.<?php echo number_format("$totalharga") ?></strong></td>
                            </tr>
                            

                        </tbody>
                    </table>
                    <?php } ?>
            ============================
            <p style="text-align: center"><?php  echo date('d-m-Y H:i:s'); ?></p>
            ============================
            <p style="text-align: center">Kritik & Saran Whatsapp: 0895324998416</p>
            </div>
          </div>
        </div>
        <script>
        window.print()
      </script>
        
</body>
</html>
