<?php echo form_open('mata_kuliah/create');?>
<table>
    <tr><td>kode_mk</td><td><?php echo form_input('kode_mk');?></td></tr>
    <tr><td>nama mata kuliah</td><td><?php echo form_input('nama_mk');?></td></tr>
    <tr><td>sks</td><td><?php echo form_input('sks');?></td></tr>
    <tr><td>NIP</td><td><?php echo form_input('nip');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mata_kuliah','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
