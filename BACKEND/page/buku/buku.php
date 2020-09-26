<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Buku</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;
                                        
                                            $sql = $koneksi->query("select * from tb_buku");

                                            while ($data=$sql->fetch_assoc()) {
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['no_buku'];?></td>
                                            <td><?php echo $data['judul_buku'];?></td>
                                            <td><?php echo $data['pengarang'];?></td>
                                            <td><?php echo $data['penerbit'];?></td>
                                            <td><?php echo $data['tahun_terbit'];?></td>
                                            <td>
                                                <a href="?page=buku&aksi=ubah&no_buku=<?php echo $data['no_buku']; ?>" class="btn btn-info" >Edit</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ... ???')" href="?page=buku&aksi=hapus&no_buku=<?php echo $data['no_buku']; ?>" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>


                                   </div>

                                   <a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

                        </div>
                     </div>
                   </div>
     </div>