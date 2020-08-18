
<?php

 $parameter = $_GET['id_anggota'];
    $ambil_data = $this->db->query(" SELECT * FROM anggota where id= '$parameter' ");
    $hasil_ambil_data = $ambil_data->row();

?>

nama <input type="text" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
alamat <input type="text" name="alamat" value="<?php echo $hasil_ambil_data->alamat;?>">
telp<input type="text" name="telp" value="<?php echo $hasil_ambil_data->telp;?>">


