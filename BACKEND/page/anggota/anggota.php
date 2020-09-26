<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Anggota</th>
                                            <th>Nama</th>
                                            <th>Nis</th>
                                            <th>kelas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;
                                        
                                            $sql = $koneksi->query("select * from tb_kartu_anggota");

                                            while ($data=$sql->fetch_assoc()) {
                                        
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['no_anggota'];?></td>
                                            <td><?php echo $data['nama_anggota'];?></td>
                                            <td><?php echo $data['nis_anggota'];?></td>
                                            <td><?php echo $data['kelas_ang'];?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&no_anggota=<?php echo $data['no_anggota']; ?>" class="btn btn-info" >Edit</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ... ???')" href="?page=anggota&aksi=hapus&no_anggota=<?php echo $data['no_anggota']; ?>" class="btn btn-danger" >Hapus</a>
                                            </td>
                                        </tr>


                                        <?php } ?>
                                    </tbody>


                                   </div>

                                   <a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 5px;"><i calss="fa fa-plus"></i>Tambah Data</a>

                                   <a href="./laporan/lap_anggota_exel.php" target="blank" class="btn btn-default" style="margin-bottom: 5px"><i class="fa fa-print"></i>ExportToExel</a>

                        </div>
                     </div>
                   </div>
     </div>