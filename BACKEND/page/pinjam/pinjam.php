<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pinjam
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Anggota</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Tgl Pinjam</th>
                                            <th>Tgl Kembali</th>
                                            <th>No Buku</th>
                                            <th>Judul Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;
                                        
                                            $sql = $koneksi->query("select * from tb_pinjam");

                                            while ($data=$sql->fetch_assoc()) {
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['no_anggota'];?></td>
                                            <td><?php echo $data['Nama'];?></td>
                                            <td><?php echo $data['Kelas'];?></td>
                                            <td><?php echo $data['Tgl_pjm'];?></td>
                                            <td><?php echo $data['Tgl_kbli'];?></td>
                                            <td><?php echo $data['no_buku'];?></td>
                                            <td><?php echo $data['judulbuku'];?></td>
                                            <td>
                                                <a href="?page=pinjam&aksi=ubah&id_pinjam=<?php echo $data['id_pinjam']; ?>" class="btn btn-info" >Edit</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ... ???')" href="?page=pinjam&aksi=hapus&id_pinjam=<?php echo $data['id_pinjam']; ?>" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>


                                   </div>

                                   <a href="?page=pinjam&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;">Tambah Data</a>

                        </div>
                     </div>
                   </div>
     </div>