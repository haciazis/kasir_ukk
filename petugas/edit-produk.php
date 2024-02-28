<?php
include_once("../koneksi/koneksi.php");

if (isset($_POST['update'])) {
    $id = $_GET['ProdukID'];
    $name = $_POST['NamaProduk'];
    $harga = $_POST['Harga'];
    $stok = $_POST['Stok'];

    $target = "../foto/";
  $time = date('dmYHis');
  $type = strtolower(pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION));
  $targetfile = $target . $time . '.' . $type;
  $filename = $time . '.' . $type;
  
  $uploadOk = 1;

  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetfile)) {
    $sql = "UPDATE produk SET NamaProduk='$name', Harga=$harga, Stok=$stok, Foto='$filename' WHERE ProdukID=$id";
      if ($con->query($sql) === TRUE) {
          echo "<script>alert('Berhasil Mengubah Produk');window.location.href='?page=stok';</script>";
          exit();
      } else {
          echo "Error: " . $sql . "<br>" . $con->error;
      }
  } else {
      echo "Maaf, terjadi kesalahan saat mengupload file gambar.";
  }

    header("Location: index.php?page=stok");
}

$id = $_GET['ProdukID'];

$result1 = mysqli_query($con, "SELECT * FROM produk WHERE ProdukID=$id");

while($user_data = mysqli_fetch_array($result1))
{
    $name = $user_data['NamaProduk'];
    $harga = $user_data['Harga'];
    $stok = $user_data['Stok'];
}
?>

        <div class="col-md-12">
            <div class="card well">
                <div class="card-header">
                    <h3 class="">Edit Produk</h3>
                </div>
                <div class="card-body">
                    <form class="pt-3 mt-3" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <p class="col-form-label" for="">Nama Produk</p>
                            <input type="text" name="NamaProduk" class="form-control" value="<?php echo $name; ?>" id="exampleInputEmail1" placeholder="Nama Barang">
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <p class="col-form-label" for="">Harga</p>
                                <input type="number" name="Harga" class="form-control" value="<?php echo $harga; ?>" id="exampleInputEmail1" placeholder="0">
                            </div>
                            <div class="form-group col-sm-6">
                                <p class="col-form-label" for="">Stok</p>
                                <input type="number" name="Stok" class="form-control" value="<?php echo $stok; ?>" id="exampleInputEmail1" placeholder="0">
                            </div>
                            <div class="mb-3">
                                    <label for="foto" class="from-label">Foto<span style="color: red;"> *</span></label>
                                    <input type="file" class="from-control" id="Foto" value="<?php echo $foto;?>" name="foto">
                                    <p style="color: red;">Hanya bisa menginput foto dengan ekstensi PNG, JPG, SVG</p>
                                </div>
                                 <div class="form-group">
                            <button class="btn btn-block btn-primary" name="update">Edit Produk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


