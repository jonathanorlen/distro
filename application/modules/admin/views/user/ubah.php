<form method="POST" action="<?php echo base_url() . 'anggota/simpan_ubah' ?>">

<?php

	$parameter = $_GET['id_anggota'];
    $ambil_data = $this->db->query(" SELECT * FROM anggota where id= '$parameter' ");
    $hasil_ambil_data = $ambil_data->row();

?>

id_anggota <input type="text" name="id_anggota" value="<?php echo $hasil_ambil_data->id;?>">
nama <input type="text" name="nama" value="<?php echo $hasil_ambil_data->nama;?>">
alamat <input type="text" name="alamat" value="<?php echo $hasil_ambil_data->alamat;?>">
telp<input type="text" name="telp" value="<?php echo $hasil_ambil_data->telp;?>">

 <input type="submit" value="simpan">	

</form>

