<?php echo form_open_multipart('karyawan/create');?>
<table border="1">
    <tr>
    <th colspan="2" style="background-color: Aquamarine">TAMBAH DATA KARYAWAN</th>
    </tr>
    <tr><td>No            :</td><td><?php echo form_input('id');?></td></tr>
    <tr><td>NAMA KARYAWAN :</td><td><?php echo form_input('nama_karyawan');?></td></tr>
    <tr><td>JENIS KELAMIN :</td><td><?php echo form_input('jenis_kelamin');?></td></tr> 
    <tr><td>TELEPON :</td><td><?php echo form_input('telepon');?></td></tr> 
    <tr><td>JABATAN :</td><td><?php echo form_input('jabatan');?></td></tr> 
    <tr><td>ALAMAT :</td><td><?php echo form_input('alamat');?></td></tr> 
    <tr><td>AGAMA :</td><td><?php echo form_input('agama');?></td></tr>        
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('karyawan','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>