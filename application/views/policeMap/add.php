
	<h3>Add new cop</h3>
	<a href="<? echo base_url('police/index'); ?>" class="btn btn-default">Back</a>

	<form action="<?php echo base_url('police/submit'); ?>" method ="post" class="form-horizontal">
		
		<div class="form-group">
			<label for="cops_firstname" class="col-md-2 text-right">Title</label>
			<div class="col-md-10">
				<input required type="text" name="cops_firstname" placeholder="Firstname">
			</div>

		<div class="form-group">
			<label for="cops_lastname" class="col-md-2 text-right">Lastname</label>
			<div class="col-md-10">	
				<input required type="text" name="cops_lastname" placeholder="Lastname">
			</div>

		<div class="form-group">
			<label for="cops_phonenumber" class="col-md-2 text-right">Phonenumber</label>
			<div class="col-md-10">	
				<input required type="number" name="cops_phonenumber" placeholder="Phonenumber">
			</div>

		<div class="form-group">
			<label for="cops_email" class="col-md-2 text-right">Email</label>
			<div class="col-md-10">	
				<input required type="text" name="cops_email" placeholder="Email">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-2 text-right"></label>
			<div class="col-md-10">	
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			</div>
		</div>


	</form>


