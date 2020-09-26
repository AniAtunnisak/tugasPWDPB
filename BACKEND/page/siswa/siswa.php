<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Siswa
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nis</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;
                                        
                                            $sql = $koneksi->query("select * from tb_siswa");

                                            while ($data=$sql->fetch_assoc()) {
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nis'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['kelas'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td>
                                                <a href="?page=siswa&aksi=ubah&nis=<?php echo $data['nis']; ?>" class="btn btn-info" >Edit</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ... ???')" href="?page=siswa&aksi=hapus&nis=<?php echo $data['nis']; ?>" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>


                                   </div>

                                   <a href="?page=siswa&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

                        </div>
                     </div>
                   </div>
     </div>