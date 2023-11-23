<form action="<?php echo base_url('buku/insert');?>" method="post">
    <label>judul</label>
    <input type="text" name="judul">
    <br>
    <label>penerbit</label>
    <input type="text" name="penerbit">
    <br>
    <label>pengarang</label>
    <input type="text" name="pengarang">
    <br>
    <input type="submit" name="simpan" value="simpan">
</form>