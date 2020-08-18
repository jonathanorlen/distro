<a href="<?php echo base_url() . 'anggota/tambah' ?>">tambah</a>

<table border="1">
	<tr>
		<td>id</td>
		<td>nama</td>
		<td>alamat</td>
		<td>telp</td>
		<td>action</td>
	</tr>

	<?php

	$ambil_data = $this->db->get('anggota');
	$hasil_ambil_data = $ambil_data->result_array();

	foreach ($hasil_ambil_data as $item) {
		?> 

		<tr>
			<td><?php echo $item['id'];?></td>
			<td><?php echo $item['nama'];?></td>
			<td><?php echo $item['alamat'];?></td>
			<td><?php echo $item['telp'];?></td>
			<td>
			<a href="<?php echo base_url() . 'anggota/detail?id_anggota='.$item['id'] ?>">detail</a>
			<a href="<?php echo base_url() . 'anggota/ubah?id_anggota='.$item['id'] ?>">ubah</a>
			<a href="<?php echo base_url() . 'anggota/hapus?id_anggota='.$item['id'] ?>">hapus</a>
			</td>
		</tr>

		<?php 
	}
	?>

</table>