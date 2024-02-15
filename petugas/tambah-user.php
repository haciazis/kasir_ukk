<div class="well">
        <h2>Tambahkan User</h2>
        <form action="" method="post">
        <div class="form-input"> 
                <label for="" class="form-label">Id User:</label>
                <input class="form-control" type="text" name="iduser">
            </div>
            <div class="form-input"> 
                <label for="" class="form-label">Nama User:</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-input">
                <label for="" class="form-label">Password</label>
                <input class="form-control" type="password" name="Password">
            </div>
            <div class="form-input">
                <label for="pwd" class="form-label" >Level: <label>
                <select class="form-control" id="pwd" placeholder="Enter-password" name="level">
                    <option value="admin"> Admin</option>
                    <option value="petugas"> Petugas</option>
                </select>
            </div>
            <div class="form-input">
                <button name="submit" class="input">login</button>
            </div>
        </form>
    </div>
    <?php 
			include '../koneksi/koneksi.php';
				if(isset($_POST['submit'])){

					$query=mysqli_query($con,"INSERT INTO user VALUES ('".$_POST['iduser']."','".$_POST['name']."','".md5($_POST['Password'])."', '".$_POST['level']."')");
					if($query){
                        echo "<script>alert('Berhasil menambah data')</script>";
						header("location: index.php?page=user");
					}
				}
			 ?>