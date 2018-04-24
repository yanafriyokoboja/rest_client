<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>kode_mk</th><th>nama_mk</th><th>ID JURUSAN</th><th>ALAMAT</th><th></th></tr>
    <?php
    foreach ($mata_kuliah as $m){
        echo "<tr>
              <td>$m->kode_mk</td>
              <td>$m->nama_mk</td>
              <td>$m->sks</td>
              <td>".anchor('mata_kuliah/edit/'.$m->kode_mk,'Edit')."
                  ".anchor('mata_kuliah/delete/'.$m->kode_mk,'Delete')."</td>
              </tr>";
    }
    
    ?>
    <a href="mata_kuliah/create">Create</a>
</table>
