<?php

     $no_buku = $_GET['no_buku'];

     $sql = $koneksi->query("select * from tb_buku where no_buku='$no_buku'");

     $tampil = $sql->fetch_assoc();

     $tahun2 = $tampil['tahun_terbit'];
      
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
                                            <label>No Buku</label>
                                            <input class="form-control" name="no_buku" value="<?php echo $tampil['no_buku']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul_buku" value="<?php echo $tampil['judul_buku']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit']; ?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit">
                                                <?php
                                                
                                                   $tahun = date("Y");

                                                   for ($i=$tahun-40; $i <= $tahun; $i++) { 
                                                       
                                                       if ($i==$tahun2 ) {

                                                        echo'<option value="'.$i.'" selected>'.$i.'</option>';

                                                       }else{

                                                        echo'<option value="'.$i.'">'.$i.'</option>';
                                                        }
                                                   }
                                                
                                                ?>
                                            </select>
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
 
   $no_buku = $_POST ['no_buku'];
   $judul_buku = $_POST ['judul_buku'];
   $pengarang = $_POST ['pengarang'];
   $penerbit = $_POST ['penerbit'];
   $tahun_terbit = $_POST ['tahun_terbit'];

   $simpan = $_POST ['simpan'];


    if ($simpan) {
        
        $sql = $koneksi->query("update tb_buku set no_buku='$no_buku', judul_buku='$judul_buku', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit' where no_buku='$no_buku'");
        
        if ($sql) {
            ?>
               <script type="text/javascript">

                   alert ("Ubah Data Berhasil Disimpan");
                   window.location.href="?page=buku";

               </script>
            <?php
        }
    }
 
 ?>