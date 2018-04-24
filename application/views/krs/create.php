<?php echo form_open('krs/create');?>
<table>
    <tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr><td>JURUSAN</td><td>
            <select name="kode_jurusan">
            <?php
            foreach ($kode_mk as $j){
                echo "<option value='$j->kode_jurusan'>$j->nama_jurusan</option>";
            }
            ?>
            </select>
        </td></tr>
        <tr><td>MATA KULIAH</td><td>
            <select name="kode_mk">
            <?php
            foreach ($kode_mk  as $j){
                
                echo "<option value='$j->kode_mk'>$j->nama_mk</option>";
            }
            
            ?>
            </select>
        </td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('krs','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
