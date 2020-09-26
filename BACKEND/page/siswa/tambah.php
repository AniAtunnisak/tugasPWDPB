<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data
  </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="kelas" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" />
                                            
                                        </div>

                                       <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                       </div> 

                                 </div>
                              </div>
 </div>
 </div>
 </div>


 <?php
 
  $nis = $_POST ['nis'];
  $nama = $_POST ['nama'];
  $kelas = $_POST ['kelas'];
  $alamat = $_POST ['alamat'];

  $simpan = $_POST ['simpan'];


    if ($simpan) {
      
        $sql = $koneksi->query("insert into tb_siswa (nis, nama, kelas, alamat )values('$nis', '$nama', '$kelas', '$alamat')");
      
        if ($sql) {
            ?>
                <script type="text/javascript">

                    alert ("Data Berhasil Disimpan");
                    window.location.href="?page=siswa";

                </script>
            <?php
         }
     }

 ?>
