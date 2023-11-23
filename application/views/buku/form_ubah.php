<form action="<?php echo base_url('buku/update');?>" method="post">
    <label>judul</label>
    <input type="text" name="judul" value="<?php echo $judul?>">
    <input type="hidden" name="id" value="<?php echo $id?>">
    <br>
    <label>penerbit</label>
    <input type="text" name="penerbit" value="<?php echo $penerbit?>">
    <br>
    <label>pengarang</label>
    <input type="text" name="pengarang" value="<?php echo $pengarang?>">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>