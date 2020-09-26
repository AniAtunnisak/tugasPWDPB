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
                                            <input class="form-control" name="nama_anggota" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="nis_anggota" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kelas</label>
                                            <input class="form-control" name="kelas_ang" />
                                            
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
   $nama_anggota = $_POST ['nama_anggota'];
   $nis_anggota = $_POST ['nis_anggota'];
   $kelas_ang = $_POST ['kelas_ang'];

   $simpan = $_POST ['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("insert into tb_kartu_anggota (no_anggota, nama_anggota, nis_anggota, kelas_ang )values('$no_anggota', '$nama_anggota', '$nis_anggota', '$kelas_ang ')");
        
        if ($sql) {
            ?>
               <script type="text/javascript">

                   alert ("Data Berhasil Disimpan");
                   window.location.href="?page=anggota";

               </script>
            <?php
        }
    }
 
 ?>