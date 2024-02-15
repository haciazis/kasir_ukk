<?php 
include "../koneksi/koneksi.php";

error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
    $namauser = $_POST['NamaUser'];
    $password = md5($_POST['Password']);
  
    $sql = "SELECT * FROM user WHERE NamaUser='$namauser' AND Password='$password'";
    $result = mysqli_query($con, $sql);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);

        $level = $row['level'];
        $_SESSION['level'] = $level;

        $_SESSION['NamaUser'] = $row['NamaUser'];

        header("Location: index.php");
        
        echo "<script>alert('Berhasil Masuk!')</script>";
    } else {
        echo "<script>alert('Username atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kotak">
        <h2>login user</h2>
        <form action="" method="post">
            <div class="form-input"> 
                <label for="">Nama User</label>
                <input class="input" type="text" name="NamaUser">
            </div>
            <div class="form-input">
                <label for="">Password</label>
                <input class="input" type="password" name="Password">
            </div>
            <div class="form-input">
                <button name="submit" class="input">login</button>
            </div>
        </form>
    </div>
</body>
</html>