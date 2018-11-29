<?php $logo = $this->db->get('INFO')->row()->INFO_LOGO; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Member</title>
	<style>
		@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
		body { font-family: 'Poppins', sans-serif; font-size: 12px;}
		img{ width: 300px; }
		table{ border-collapse: collapse; border: 1px solid black }
		table th{ padding: 7px; }
		table td{ padding: 5px; }
	</style>
</head>
<body>
<small>Tanggal Cetak : <?php echo date('Y F d H:i:s'); ?></small><br><br>
<img src="./uploads/<?php echo $logo; ?>">
<h1># DATA MEMBER</h1>
<br>
<br>
<table border="1" width="100%">
	<thead>
		<tr>
			<?php if( $this->input->post('no') == 'on' ){ ?> <th>#</th> <?php } ?>
			<?php if( $this->input->post('nik') == 'on' ){ ?> <th>NIK</th> <?php } ?>
		    <?php if( $this->input->post('nama') == 'on' ){ ?> <th>Nama</th> <?php } ?>
		    <?php if( $this->input->post('hp') == 'on' ){ ?> <th>No HP</th> <?php } ?>
		  	<?php if( $this->input->post('email') == 'on' ){ ?> <th>Email</th> <?php } ?>
		  	<?php if( $this->input->post('alamat') == 'on' ){ ?> <th>Alamat</th> <?php } ?>
		  	<?php if( $this->input->post('status') == 'on' ){ ?> <th>Status</th> <?php } ?>
		  	<?php if( $this->input->post('tanggal') == 'on' ){ ?> <th>Tanggal</th> <?php } ?>
		</tr>
	</thead>
	<tbody>
	<?php $no =1; foreach ( $query_member->result() as $row) { ?>
		<tr>
			<?php if( $this->input->post('no') == 'on' ){ ?> <td><?php echo $no++; ?></td> <?php } ?>
			<?php if( $this->input->post('nik') == 'on' ){ ?> <td><?php echo $row->MEMBER_NIK; ?></td> <?php } ?>
			<?php if( $this->input->post('nama') == 'on' ){ ?> <td><?php echo $row->MEMBER_NAMA; ?></td> <?php } ?>
			<?php if( $this->input->post('hp') == 'on' ){ ?> <td><?php echo $row->MEMBER_HP; ?></td> <?php } ?>
			<?php if( $this->input->post('email') == 'on' ){ ?> <td><?php echo $row->MEMBER_EMAIL; ?></td> <?php } ?>
			<?php if( $this->input->post('alamat') == 'on' ){ ?> <td><?php echo $row->MEMBER_ALAMAT.' - '.$row->MEMBER_DESA.' - '.$row->MEMBER_KECAMATAN.' - '.$row->MEMBER_KABUPATEN.' - '.$row->MEMBER_PROVINSI.''; ?></td> <?php } ?>
			<?php if( $this->input->post('status') == 'on' ){ ?> <td><?php echo $row->MEMBER_STATUS; ?></td> <?php } ?>
			<?php if( $this->input->post('tanggal') == 'on' ){ ?> <td><?php echo  __tgl_full($row->MEMBER_ADD); ?></td> <?php } ?>
		</tr>
	<?php } ?>
	</tbody>
</table>
</body>
</html>