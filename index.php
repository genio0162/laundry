<?php 
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
  include "koneksi.php";
    include "function.php"; 
    $plgn = query("SELECT * FROM tb_pelanggan INNER JOIN tb_perfum ON tb_pelanggan.id_parfum = tb_perfum.id_parfum");
    
    ?>
<?php
include 'template/header.php';
?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Laundry Ceria</h1>
          <p class="mb-4"><a class="btn btn-primary" href="tambah.php" role="button">Tambah Pelanggan</a>
          <a class="btn btn-primary" href="insertp.php" role="button">Tambah Perfum</a></p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Data Pelanggan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                        <td>No.</td>
                        <td>Nama</td>
                        <td>Berat</td>
                        <td>Harga</td>
                        <td>Jumlah Baju</td>
                        <td>Parfum</td>
                        <td>Tanggal Terima</td>
                        <td>Tanggal Kembali</td>
                        <td>Keterangan</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                  </thead>
                  <?php $nomer = 1  ?>
                    <?php foreach ($plgn as $ls ) :?>
                  <tbody>
                  <tr>
                        <td><?php  
                            echo $nomer;
                        ?></td>
                        <td><?php echo $ls["nama"]; ?></td>
                        <td><?php echo $ls["berat"]; ?> kg</td>
                        <td>Rp <?php echo number_format($ls["harga"]); ?></td>
                        <td><?php echo $ls["jmlh_baju"]; ?> buah</td>
                        <td><?php echo $ls["wangi_perfum"]; ?></td>
                        <td><?php echo date('d F Y', strtotime($ls["tgl_terima"])); ?></td>
                        <td><?php echo date('d F Y', strtotime($ls["tgl_kembali"])); ?></td>
                        <?php if (date($ls["tgl_kembali"]) <= date('Y-m-d')):?>
                
                        <td><font color = "green"><?php echo "Dapat Diambil"; ?></font></td>
                        <?php elseif (date($ls["tgl_kembali"]) > date('Y-m-d')) :?>
                        
                        <td><font color = "red"><?php echo "Belum Dapat Diambil"; ?></font></td>
                        <?php endif; ?>
                        <?php if ($ls["status1"] == 1 ):?>
                        <td><font color = "green"><?php echo "Sudah dibayar"; ?></font></td>
                        <?php else: ?>
                        <td><font color = "red"><?php echo "Belum dibayar"; ?></font></td>
                        <?php endif; ?>
                        <td><a href = "ubah.php?id=<?php echo $ls["id"]; ?>">Ubah</a> |
                        <a href = "hapus.php?id=<?php echo $ls["id"]; ?>">Hapus</a>
                        </td>
                    <?php $nomer++ ?>   
                    <?php endforeach; ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
include 'template/footer.php';
?>

