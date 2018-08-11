
	<h3>Blog list</h3>

	<?php

	// Geeft success message

		if ($this->session->flashdata('success_msg')) {
	?>

		<div class="alert alert-success">
			<?php echo $this->session->flashdata('success_msg'); ?>
		</div>

	<?php
		}
	?>

	<?php
		if ($this->session->flashdata('error_msg')) {
	?>

		<div class="alert alert-success">
			<?php echo $this->session->flashdata('error_msg'); ?>
		</div>

	<?php
		}
	?>

	

	<a href="<? echo base_url('police/add'); ?>" class="btn btn-primary">Add New</a>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>ID</td>
				<th>Cops Firstname</th>
				<th>Cops Lastname</th>
				<th>Cops Phonenumber</th>
				<th>Cops Email</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php
		if ($cops) {
			foreach ($cops as $cop) {
		?>
			<tr>
				<td><?php echo $cop->cops_id;?></td>
				<td><?php echo $cop->cops_firstname;?></td>
				<td><?php echo $cop->cops_lastname;?></td>
				<td><?php echo $cop->cops_phonenumber;?></td>
				<td><?php echo $cop->cops_email;?></td>
				<td>
					<a href="<?php echo base_url('police/edit/' . $cop->cops_id); ?>" class="btn btn-info">Edit</a>

					<a href="<?php echo base_url('police/delete/' . $cop->cops_id); ?>" class="btn btn-danger">Delete</a>
				</td>
			</tr>

		<?php
			}
		}
		?>
		</tbody>
	</table>
