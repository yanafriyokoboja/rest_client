<?php echo $this->session->flashdata('hasil'); ?>
<table>
    <tr><th>NIP</th><th>NAMA</th><th>ALAMAT</th><th></th></tr>
    <?php
    foreach ($dosen as $m){
        echo "<tr>
              <td>$m->nip</td>
              <td>$m->nama_dosen</td>
              <td>$m->alamat</td>
              <td>".anchor('dosen/edit/'.$m->nip,'Edit')."
                  ".anchor('dosen/delete/'.$m->nip,'Delete')."</td>
              </tr>";
    }
    ?>
    <a href="dosen/create">Create</a>
</table>
