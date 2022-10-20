
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
$qry = $conn->query("SELECT * FROM folders where id=".$_GET['id']);
	if($qry->num_rows > 0){
		foreach($qry->fetch_array() as $k => $v){
			$meta[$k] = $v;
		}
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-folder">
		<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] :'' ?>">
		<input type="hidden" name="parent_id" value="<?php echo isset($_GET['fid']) ? $_GET['fid'] :'' ?>">
		<div class="form-group">
			<label for="name" class="control-label">Folder Name</label>
			<input type="text" name="name" id="name" value="New Folder"<?php echo isset($meta['name']) ? $meta['name'] :'' ?> class="form-control">
		</div>
	<!-- Admin for EDUC -->


							<?php if($_SESSION['login_type'] == 1): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="educ"<?php echo isset($meta['dept']) && $meta['dept'] == 1 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>

							<?php if($_SESSION['login_type'] == 2): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="educ"<?php echo isset($meta['dept']) && $meta['dept'] == 2 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>
	<!-- Admin for CSD -->


							<?php if($_SESSION['login_type'] == 6): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="csd"<?php echo isset($meta['dept']) && $meta['dept'] == 6 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>

							<?php if($_SESSION['login_type'] == 3): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="csd"<?php echo isset($meta['dept']) && $meta['dept'] == 3 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>
	<!-- Admin for ENG -->


							<?php if($_SESSION['login_type'] == 7): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="eng"<?php echo isset($meta['dept']) && $meta['dept'] == 7 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>

							<?php if($_SESSION['login_type'] == 4): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="eng"<?php echo isset($meta['dept']) && $meta['dept'] == 4 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>
	<!-- Admin for TECH -->


							<?php if($_SESSION['login_type'] == 8): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="tech"<?php echo isset($meta['dept']) && $meta['dept'] == 8 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>
							<?php if($_SESSION['login_type'] == 5): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="tech"<?php echo isset($meta['dept']) && $meta['dept'] == 5 ? : '' ?> class="form-control">
		</div>

	<?php endif; ?>

		<div class="form-group">
			<label for="is_public" class="control-label"><input type="checkbox" name="is_public" id="is_public"><i> Share to Admin</i></label>
		</div>


		<div class="form-group" id="msg"></div>


	</form>
</div>
<script>
	$(document).ready(function(){
		$('#manage-folder').submit(function(e){
			e.preventDefault()
			start_load();
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_folder',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(typeof resp != undefined){
					resp = JSON.parse(resp);
					if(resp.status == 1){
						alert_toast("New Folder successfully added.",'success')
						setTimeout(function(){
							location.reload()
						},1500)
					}else{
						$('#msg').html('<div class="alert alert-danger">'+resp.msg+'</div>')
						end_load()
					}
				}
			}
		})
		})
	})
</script>