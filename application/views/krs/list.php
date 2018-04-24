<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>NIM</th><th>NAMA</th><th>JURUSAN</th><th>matkul</th><th>sks</th><th>dosen</th><th></th></tr>
    <?php
    foreach ($krs as $m){
        echo "<tr>
              <td>$m->nim</td>
              <td>$m->nama_mhs</td>
              <td>$m->nama_jurusan</td>
              <td>$m->nama_mk</td>
              <td>$m->sks</td>
              <td>$m->nama_dosen</td>
              <td>".anchor('krs/delete/'.$m->nim,'Batal')."</td>
              </tr>";
    }
    
    ?>
    <a href="krs/create">Tambah</a>
</table>
