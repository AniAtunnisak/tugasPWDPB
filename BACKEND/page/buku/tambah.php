<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data
  </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">

                                    <form method="POST" >
                                        <div class="form-group">
                                            <label>No Buku</label>
                                            <input class="form-control" name="no_buku" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul_buku" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                                <?php
                                                
                                                   $tahun = date("Y");

                                                   for ($i=$tahun-40; $i <= $tahun; $i++) { 
                                                       echo'
                                                       
                                                           <option value="'.$i.'">'.$i.'</option>

                                                       ';
                                                   }
                                                
                                                ?>
                                            </select>
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
 
   $no_buku = $_POST ['no_buku'];
   $judul_buku = $_POST ['judul_buku'];
   $pengarang = $_POST ['pengarang'];
   $penerbit = $_POST ['penerbit'];
   $tahun_terbit = $_POST ['tahun_terbit'];

   $simpan = $_POST ['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("insert into tb_buku (no_buku, judul_buku, pengarang, penerbit, tahun_terbit )values('$no_buku', '$judul_buku', '$pengarang', '$penerbit', '$tahun_terbit ')");
        
        if ($sql) {
            ?>
               <script type="text/javascript">

                   alert ("Data Berhasil Disimpan");
                   window.location.href="?page=buku";

               </script>
            <?php
        }
    }
 
 ?>