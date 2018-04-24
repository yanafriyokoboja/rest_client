<?php echo form_open('dosen/edit');?>
<?php echo form_hidden('nip',$dosen[0]->nip);?>
 
<table>
    <tr><td>NIP</td><td><?php echo form_input('',$dosen[0]->nip,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_dosen',$dosen[0]->nama_dosen);?></td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat',$dosen[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('dosen','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
