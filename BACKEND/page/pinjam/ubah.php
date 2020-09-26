<?php

     $id_pinjam = $_GET['id_pinjam'];

     $sql = $koneksi->query("select * from tb_pinjam where id_pinjam='$id_pinjam'");

     $tampil = $sql->fetch_assoc();

      
?>

<div class="panel panel-default">
<div class="panel-heading">
    Ubah Data
  </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>No Anggota</label>
                                            <input class="form-control" name="no_anggota" value="<?php echo $tampil['no_anggota']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="Nama" value="<?php echo $tampil['Nama']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="Kelas" value="<?php echo $tampil['Kelas']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tgl Pinjam</label>
                                            <input class="form-control" name="Tgl_pjm" type="date" value="<?php echo $tampil['Tgl_pjm']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tgl Kembali</label>
                                            <input class="form-control" name="Tgl_kbli" type="date" value="<?php echo $tampil['Tgl_kbli']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>No Buku</label>
                                            <input class="form-control" name="no_buku" value="<?php echo $tampil['no_buku']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judulbuku" value="<?php echo $tampil['judulbuku']; ?>" />
                                            
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                                       </div> 

                                 </div>

                                 </form>
                              </div>
 </div>
 </div>
 </div>


 <?php
 
   $no_anggota = $_POST ['no_anggota'];
   $Nama = $_POST ['Nama'];
   $Kelas = $_POST ['Kelas'];
   $Tgl_pjm = $_POST ['Tgl_pjm'];
   $Tgl_kbli = $_POST ['Tgl_kbli'];
   $no_buku = $_POST ['no_buku'];
   $judulbuku = $_POST ['judulbuku'];

   $simpan = $_POST ['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("update tb_pinjam set no_anggota='$no_anggota', Nama='$Nama', Kelas='$Kelas', Tgl_pjm='$Tgl_pjm', Tgl_kbli='$Tgl_kbli', no_buku='$no_buku', judulbuku='$judulbuku' where id_pinjam='$id_pinjam'");
        
        if ($sql) {
            ?>
               <script type="text/javascript">

                   alert ("Ubah Data Berhasil Disimpan");
                   window.location.href="?page=pinjam";

               </script>
            <?php
        }
    }
 
 ?>