<?php echo form_open('mata_kuliah/edit');?>
<?php echo form_hidden('kode_mk',$mata_kuliah[0]->kode_mk);?>
 
<table>
    <tr><td>kode_mk</td><td><?php echo form_input('',$mata_kuliah[0]->kode_mk,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_mk',$mata_kuliah[0]->nama_mk);?></td></tr>
    <tr><td>sks</td><td><?php echo form_input('sks',$mata_kuliah[0]->sks);?></td></tr>
    <tr><td>NIP</td><td><?php echo form_input('nip',$mata_kuliah[0]->nip);?></td></tr>

    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mata_kuliah','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
