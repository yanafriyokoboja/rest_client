<?php echo form_open('mahasiswa/create');?>
<table>
    <tr><td>NIM</td><td><?php echo form_input('nim');?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama_mhs');?></td></tr>
    <tr><td>JURUSAN</td><td>
            <select name="kode_jurusan">
            <?php
            foreach ($jurusan as $j){
                echo "<option value='$j->kode_jurusan'>$j->nama_jurusan</option>";
            }
            ?>
            </select>
        </td></tr>
    <tr><td>ALAMAT</td><td><?php echo form_input('alamat');?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
