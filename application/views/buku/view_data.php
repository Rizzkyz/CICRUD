<a href="<?php echo base_url('buku/tambah');?>"> Tambah Buku Baru</a>

<TABLE>
    <th>JUDUL</th>
    <TH>PENERBIT</TH>
    <TH>PENGARANG</TH>
    <TH>UBAH</TH>
    <TH>HAPUS</TH>
    <?php foreach ($buku as $a): ?>
    <TR>
        <TD><?php echo $a['judul']?></TD>
        <TD><?php echo $a['penerbit']?></TD>
        <TD><?php echo $a['pengarang']?></TD>
        <TD><a href="<?php echo site_url('buku/get_edit/'.$a['id']);?>"> UBAH</a></TD>
        <TD><a href="<?php echo site_url('buku/hapus/'.$a['id']);?>"> HAPUS</a></TD>
    </TR>
    <?php endforeach;?>
</TABLE>