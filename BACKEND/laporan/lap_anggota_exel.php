<?php

      $koneksi = new mysqli("localhost","root","","perpustakaan");

      $filename = "anggota_exel-(".date('d-m-Y').").xls";

      header("content-disposition: attachment; filename='$filename'");
      header("content-type: application/vdn.ms-exel");



?>

<h2>Laporan Anggota</h2>

<table border="1">
    <tr>
        <th>No</th>
        <th>No Anggota</th>
        <th>Nama</th>
        <th>Nis</th>
        <th>kelas</th>

    </tr>

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
            
    </tr>


    <?php } ?>

</table>