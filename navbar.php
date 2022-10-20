<style>
	
</style>

<nav id="sidebar" class='mx-lt-5 bg-dark' >
		
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>

				<?php if($_SESSION['login_type'] < 9): ?>
				<a href="index.php?page=files" class="nav-item nav-files"><span class='icon-field'><i class="fa fa-desktop"></i></span> My Directory</a>
<?php endif; ?>
				<?php if($_SESSION['login_type'] == 9): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-user"></i></span> My Account</a>

			<?php endif; ?>				<?php if($_SESSION['login_type'] == 10): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder-open"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-user"></i></span> My Account</a>

			<?php endif; ?>				<?php if($_SESSION['login_type'] == 11): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-user"></i></span> My Account</a>

			<?php endif; ?>				<?php if($_SESSION['login_type'] == 12): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-user"></i></span> My Account</a>

			<?php endif; ?>


				<?php if($_SESSION['login_type'] == 1): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>

				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>

			<?php endif; ?>		<?php if($_SESSION['login_type'] == 6): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>

				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>

			<?php endif; ?>		<?php if($_SESSION['login_type'] == 7): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>

				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>

			<?php endif; ?>		<?php if($_SESSION['login_type'] == 8): ?>
								<a href="index.php?page=folder" class="nav-item nav-folder"><span class='icon-field'><i class="fa fa-folder-open"></i></span> Shared Folder</a>
			<a href="index.php?page=file" class="nav-item nav-file"><span class='icon-field'><i class="fa fa-file-alt"></i></span> Shared Files</a>

				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>

			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>