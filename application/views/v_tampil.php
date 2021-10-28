<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Crud dengan CodeIgniter</title>
   </head>
   <body>
      <center>
         <h1>Daftar Identitas Mahasiswa Memakai Sistem CRUD dengan CodeIgniter</h1>
      </center>
      <center><?php echo anchor('crud/tambah', 'Tambah Data Identitas'); ?></center>
      <table style="margin:30px auto;" border="3">
         <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Action</th>
         </tr>
         <?php
         $no = 1;
         foreach ($mhs as $u){
          ?>
          <tr>
             <td><?php echo $u->nim ?></td>
             <td><?php echo $u->nama ?></td>
             <td><?php echo $u->kelas ?></td>
             <td><?php echo $u->alamat ?></td>
             <td>
                <?php echo anchor('crud/edit/' . $u->id, 'Edit'); ?>
                <?php echo anchor('crud/hapus/' . $u->id, 'Hapus'); ?>
             </td>
          </tr>
       <?php } ?>
      </table>

   </body>
</html>