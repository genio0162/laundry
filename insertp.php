<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
include "koneksi.php";
include 'function.php';
$perfum = query("SELECT * FROM tb_perfum");
if (isset($_POST["submit"])){
    $nwper = $_POST["nama"];
    $query = "INSERT INTO tb_perfum VALUES ('','$nwper')";
    mysqli_query($conn,$query);
    if (mysqli_affected_rows($conn)>0){
        echo "<script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php'
            </script>";
    }else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = 'index.php'
    </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Parfum</title>
</head>
<body>
    <h1>Tambah Parfum</h1>
    <h4>Daftar parfum :</h4>
    <table border ="1" cellpadding ="10" cellspacing="0">
    <tr>
            <td>No.</td>
            <td>Nama</td>
    </tr>
    <?php $nomer = 1  ?>
    <?php foreach ($perfum as $pf ) :?>
    <tr>
    <td><?php  echo $nomer;?></td>
    <td><?php echo $pf["wangi_perfum"]; ?></td>
    <?php $nomer++ ?>
        <?php endforeach; ?>
    </tr>
    </table>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Masukkan nama parfum baru: </label>
                <input type="text" name= "nama" required id="nama">
            </li>
            <button type="submit" name="submit">Tambah Data</button>
        </ul>
    </form>
</body>
</html>