
<?php
	session_start();
  if(!isset($_SESSION['login_id']))
    header('location:login.php');
 include('./header.php'); 
 // include('./auth.php'); 
 ?>

<?php 
include('db_connect.php');
if(isset($_GET['id'])){
$user = $conn->query("SELECT * FROM users where id =".$_GET['id']);
foreach($user->fetch_array() as $k =>$v){
	$meta[$k] = $v;
}
}
?>
<div class="container-fluid">
	
	<form action="" id="manage-user">
		<input type="hidden" name="id" value="<?php echo isset($meta['id']) ? $meta['id']: '' ?>">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($meta['name']) ? $meta['name']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" class="form-control" value="<?php echo isset($meta['username']) ? $meta['username']: '' ?>" required>
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control" value="<?php echo isset($meta['password']) ? $meta['password']: '' ?>" required>
		</div>
		<div class="form-group">


	<!-- Admin for Accreditor -->


							<?php if($_SESSION['login_type'] == 9): ?>	
		<div class="form-group">
			<input type="hidden" name="type" id="type" value="9"<?php echo isset($meta['type']) && $meta['type'] == 9 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>
							<?php if($_SESSION['login_type'] == 10): ?>	
		<div class="form-group">
			<input type="hidden" name="type" id="type" value="10"<?php echo isset($meta['type']) && $meta['type'] == 10 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>
							<?php if($_SESSION['login_type'] == 11): ?>	
		<div class="form-group">
			<input type="hidden" name="type" id="type" value="11"<?php echo isset($meta['type']) && $meta['type'] == 11 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>
							<?php if($_SESSION['login_type'] == 12): ?>	
		<div class="form-group">
			<input type="hidden" name="type" id="type" value="12"<?php echo isset($meta['type']) && $meta['type'] == 12 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>

	<!-- Admin for EDUC -->

							<?php if($_SESSION['login_type'] == 1): ?>				
			<label for="type">User Type</label>
			<select name="type" id="type" class="custom-select">
<option value="1" <?php echo isset($meta['type']) && $meta['type'] == 1 ? 'selected': '' ?>>Admin</option>
				<option value="2" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected': '' ?>>User</option>
			</select>
		<?php endif; ?>

	<!-- Admin for CSD -->
			
							<?php if($_SESSION['login_type'] == 6): ?>	

			<label for="type">User Type</label>

			<select name="type" id="type" class="custom-select">
<option value="6" <?php echo isset($meta['type']) && $meta['type'] == 6 ? 'selected': '' ?>>Admin</option>
				<option value="3" <?php echo isset($meta['type']) && $meta['type'] == 3 ? 'selected': '' ?>>User</option>
			</select>
		<?php endif; ?>
	
	<!-- Admin for ENG -->

							<?php if($_SESSION['login_type'] == 7): ?>	

			<label for="type">User Type</label>

			<select name="type" id="type" class="custom-select">
<option value="7" <?php echo isset($meta['type']) && $meta['type'] == 7 ? 'selected': '' ?>>Admin</option>
				<option value="4" <?php echo isset($meta['type']) && $meta['type'] == 4 ? 'selected': '' ?>>User</option>
			</select>
		<?php endif; ?>

	<!-- Admin for TECH -->


							<?php if($_SESSION['login_type'] == 8): ?>	

			<label for="type">User Type</label>

			<select name="type" id="type" class="custom-select">
<option value="8" <?php echo isset($meta['type']) && $meta['type'] == 8 ? 'selected': '' ?>>Admin</option>
				<option value="5" <?php echo isset($meta['type']) && $meta['type'] == 5 ? 'selected': '' ?>>User</option>
			</select>
		<?php endif; ?>
<!-- Admin for Accreditor -->


							<?php if($_SESSION['login_type'] == 9): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="accreditor<?php echo isset($meta['dept']) && $meta['dept'] == 9 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>
							<?php if($_SESSION['login_type'] == 10): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="accreditor"<?php echo isset($meta['dept']) && $meta['dept'] == 10 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>
							<?php if($_SESSION['login_type'] == 11): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="accreditor"<?php echo isset($meta['dept']) && $meta['dept'] == 11 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>
							<?php if($_SESSION['login_type'] == 12): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="accreditor"<?php echo isset($meta['dept']) && $meta['dept'] == 12 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>
	<!-- Admin for EDUC -->


							<?php if($_SESSION['login_type'] == 1): ?>	
<br><br>
<label for="dept">Department</label>
			<select name="dept" id="dept" class="custom-select">
<option value="Education" <?php echo isset($meta['dept']) && $meta['dept'] == 1 ? 'selected': '' ?>>Education</option>
			</select>	<?php endif; ?>
	<!-- Admin for csd -->


							<?php if($_SESSION['login_type'] == 6): ?>	
<br><br>
<label for="dept">Department</label>
			<select name="dept" id="dept" class="custom-select">
<option value="Computer Studies" <?php echo isset($meta['dept']) && $meta['dept'] == 6 ? 'selected': '' ?>>Computer Studies</option>
			</select>	<?php endif; ?>
	<!-- Admin for eng -->


							<?php if($_SESSION['login_type'] == 7): ?>	
<br><br>
<label for="dept">Department</label>
			<select name="dept" id="dept" class="custom-select">
<option value="Engineering" <?php echo isset($meta['dept']) && $meta['dept'] == 7 ? 'selected': '' ?>>Engineering</option>
			</select>	<?php endif; ?>
	<!-- Admin for tech -->


							<?php if($_SESSION['login_type'] == 8): ?>	
<br><br>
<label for="dept">Department</label>
			<select name="dept" id="dept" class="custom-select">
<option value="Technology" <?php echo isset($meta['dept']) && $meta['dept'] == 7 ? 'selected': '' ?>>Technology</option>
			</select>	<?php endif; ?>
			

		</div>
	</form>
</div>

<script>
	$('#manage-user').submit(function(e){
		e.preventDefault();
		start_load()
		$.ajax({
			url:'ajax.php?action=save_user',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp ==1){
					alert_toast("Data successfully saved",'success')
					setTimeout(function(){
						location.reload()
					},1500)
				}
			}
		})
	})
</script>
