<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data
  </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>No Anggota</label>
                                            <input class="form-control" name="no_anggota" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="Nama" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="Kelas" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tgl Pinjam</label>
                                            <input class="form-control" name="Tgl_pjm" type="date" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tgl Kembali</label>
                                            <input class="form-control" name="Tgl_kbli" type="date" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>No Buku</label>
                                            <input class="form-control" name="no_buku" />

                                        </div>

                                        <div class="form-group">
                                            <label>Judul Buku</label>
                                            <input class="form-control" name="judulbuku" />

                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
        
        $sql = $koneksi->query("insert into tb_pinjam (no_anggota, Nama, Kelas, Tgl_pjm, Tgl_kbli, no_buku, judulbuku )values('$no_anggota', '$Nama', '$Kelas', '$Tgl_pjm', '$Tgl_kbli', '$no_buku', '$judulbuku ')");
        
        if ($sql) {
            ?>
               <script type="text/javascript">

                   alert ("Data Berhasil Disimpan");
                   window.location.href="?page=pinjam";

               </script>
            <?php
        }
    }
 
 ?>