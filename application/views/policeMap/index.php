
	<h3>Blog list</h3>
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
					<a href="" class="btn btn-info">Edit</a>
					<a href="" class="btn btn-danger">Delete</a>
				</td>
			</tr>

		<?php
			}
		}
		?>
		</tbody>
	</table>
