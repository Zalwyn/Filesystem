<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>| Login</title>
 	

<?php include('./header.php'); ?>
<?php 
session_start();
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");
?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:100%;
		height: calc(100%);
		background-image: url(assets/bg1.jpg);
		background-repeat: no-repeat;
		background-size: 100% 100%;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
    margin: auto;
    font-size: 8rem;
    padding: .5em 0.8em;
    color: #000000b3;
}
</style>

<body>


  <main id="main" class=" alert-info">
  		<div id="login-left">
  			
  			<div class="w-100">
<center>
  				<img src="assets/BUPC.gif" height="100px" width="100px" >
 				<br>
  			
  			<div class="card-body col-md-3" style="background-color: white;border-radius: 20px">
  				<div>
  							<div style="background-color: green;color: white;padding: 14px;margin: 0px">
  							<h4 class="sidebar-brand-text mx-3 text-center"><b>BUPC ARMS</b></h4></div>
  			<hr>

  					<form id="login-form" >
  						<div class="form-group">
  							<input type="text" placeholder="Username" id="username" name="username" class="form-control text-center">
  						</div>
  						<div class="form-group">
  							<input type="password" placeholder="Password" id="password" name="password" class="form-control text-center">
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary" style="padding: 12px 0px;font-size: 18px"><b>Login</b></button></center>
  					</form>
  				</div>
  			</div>
  		</div>

  		</div>

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.reload('index.php?page=home');
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>