<?php

?>
<table border="3">
  <tr>
      <th> No</th> <th>NIK</th> <th>Nama</th> <th>Jenis Kelamin</th> <th>Tanggal lahir</th><th>Jurusan</th> <th>Usia</th>
  </tr>
    <?php
    $no=1;
    foreach ($hasil as $item)
    {
        ?>
    <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $item->nik;?></td>
        <td><?php echo $item->nama;?></td>
        <td><?php echo $item->jk;?></td>
        <td><?php echo $item->tanggal_lhr;?></td>
        <td><?php echo $item->jurusan;?></td>
        <td><?php echo $item->umur;?></td>
    </tr>
    <?php
            $no++;
    }
        ?>
</table>
