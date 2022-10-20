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
$qry = $conn->query("SELECT * FROM files where id=".$_GET['id']);
	if($qry->num_rows > 0){
		foreach($qry->fetch_array() as $k => $v){
			$meta[$k] = $v;
		}
	}
}
?>
<div class="container-fluid">
	<form action="" id="manage-files">
		<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] :'' ?>">
		<input type="hidden" name="folder_id" value="<?php echo isset($_GET['fid']) ? $_GET['fid'] :'' ?>">
		<!-- <div class="form-group">
			<label for="name" class="control-label">File Name</label>
			<input type="text" name="name" id="name" value="<?php echo isset($meta['name']) ? $meta['name'] :'' ?>" class="form-control">
		</div> -->
		<?php if(!isset($_GET['id']) || empty($_GET['id'])): ?>
		<div class="input-group mb-3">
		  <div class="input-group-prepend">
		    <span class="input-group-text">Upload</span>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" name="upload" id="upload" accept="application/pdf" onchange="displayname(this,$(this))">
		    <label class="custom-file-label" for="upload">Choose file</label>
		  </div>
		</div>
	<?php endif; ?>
		<div class="form-group">
			<label for="" class="control-label">Description</label>
			<textarea name="description" id="" cols="30" rows="10" class="form-control"><?php echo isset($meta['description']) ? $meta['description'] :'' ?></textarea>
		</div>


		<div class="form-group">
			<label for="is_public" class="control-label"><input type="checkbox" name="is_public" id="is_public"><i> Share to Admin</i></label>
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
			<input type="hidden" name="dept" id="dept" value="tech"<?php echo isset($meta['dept']) && $meta['dept'] == 5 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>

							<?php if($_SESSION['login_type'] == 5): ?>	
		<div class="form-group">
			<input type="hidden" name="dept" id="dept" value="tech"<?php echo isset($meta['dept']) && $meta['dept'] == 5 ? : '' ?> class="form-control">
		</div>
	<?php endif; ?>

		
		<div class="form-group" id="msg"></div>

	</form>
</div>
<script>
	$(document).ready(function(){
		$('#manage-files').submit(function(e){
			e.preventDefault()
			start_load();
		$('#msg').html('')
		$.ajax({
			url:'ajax.php?action=save_files',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(typeof resp != undefined){
					resp = JSON.parse(resp);
					if(resp.status == 1){
						alert_toast("New File successfully added.",'success')
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
	function displayname(input,_this) {
			    if (input.files && input.files[0]) {
			        var reader = new FileReader();
			        reader.onload = function (e) {
            			_this.siblings('label').html(input.files[0]['name'])
			            
			        }

			        reader.readAsDataURL(input.files[0]);
			    }
			}
</script>