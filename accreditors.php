
	<!-- Admin for educ accreditors -->


							<?php if($_SESSION['login_type'] == 9): ?>	

<div class="containe-fluid">
	<?php include('db_connect.php') ;
	
	?>
		<div class="row" style="margin-left: 10px">
						<?php 
			$folders = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM folders f inner join users u on u.id = f.user_id where parent_id = $folder_parent and f.is_public = 1 and f.dept='educ'  order by name asc;");


			while($row=$folders->fetch_assoc()):
			?>
				<div class="card col-md-3 mt-2 ml-2 mr-2 mb-2 folder-item" data-id="<?php echo $row['id'] ?>">
					<div class="card-body">
	<large><span><center><div class="to_folders"> <br><i class="fa fa-user"></i> <?php echo ucwords($row['uname']) ?></div><hr><i class="fa fa-folder"></i></span><b class="to_folder">					<?php echo $row['name'] ?></b></large></center>
					</div>
				</div>
			<?php endwhile; ?>

		</div>


<div class="containe-fluid">
	<?php include('db_connect.php') ;
	$files = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM files f inner join users u on u.id = f.user_id where folder_id = $folder_parent and  f.is_public = 1 and f.dept='educ' order by date(f.date_updated) desc");

	?>
	<div class="row mt-3 ml-3 mr-3">
			<div class="card col-md-12">
				<div class="card-body">
					<table width="100%">
						<tr class="btn-success">
							<th width="20%" class="">Uploader</th>
							<th width="30%" class="">Filename</th>
							<th width="20%" class="">Date</th>
							<th width="30%" class="">Description</th>
						</tr>
						<?php 
					while($row=$files->fetch_assoc()):
						$name = explode(' ||',$row['name']);
						$name = isset($name[1]) ? $name[0] ." (".$name[1].").".$row['file_type'] : $name[0] .".".$row['file_type'];
						$img_arr = array('png','jpg','jpeg','gif','psd','tif');
						$doc_arr =array('doc','docx');
						$pdf_arr =array('pdf','ps','eps','prn');
						$icon ='fa-file';
						if(in_array(strtolower($row['file_type']),$img_arr))
							$icon ='fa-image';
						if(in_array(strtolower($row['file_type']),$doc_arr))
							$icon ='fa-file-word';
						if(in_array(strtolower($row['file_type']),$pdf_arr))
							$icon ='fa-file-pdf';
						if(in_array(strtolower($row['file_type']),['xlsx','xls','xlsm','xlsb','xltm','xlt','xla','xlr']))
							$icon ='fa-file-excel';
						if(in_array(strtolower($row['file_type']),['zip','rar','tar']))
							$icon ='fa-file-archive';

					?>
						<tr class='file-item' data-id="<?php echo $row['id'] ?>" data-name="<?php echo $name ?>"  style="border-top:1px solid gray">
							<td><i><b class="to_files"> <?php echo ucwords($row['uname']) ?></b></i></td>
							<td><large><span><i class="fa <?php echo $icon ?>"></i></span><b class="to_file"> <?php echo $name ?></b></large>
							<input type="text" class="rename_file" value="<?php echo $row['name'] ?>" data-id="<?php echo $row['id'] ?>" data-type="<?php echo $row['file_type'] ?>" style="display: none">

							</td>
							<td><i><?php echo date('Y/m/d h:i A',strtotime($row['date_updated'])) ?></i></td>
							<td><i><?php echo $row['description'] ?></i></td>
						</tr>
							
					<?php endwhile; ?>
					</table>
					
				</div>
			</div>
			
		</div>
	</div>

</div>


<?php endif; ?>

	<!-- Admin for csd accreditors -->


							<?php if($_SESSION['login_type'] == 10): ?>	

<div class="containe-fluid">
	<?php include('db_connect.php') ;
	
	?>
		<div class="row" style="margin-left: 10px">
						<?php 
			$folders = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM folders f inner join users u on u.id = f.user_id where parent_id = $folder_parent and f.is_public = 1 and f.dept='csd'  order by name asc;");


			while($row=$folders->fetch_assoc()):
			?>
				<div class="card col-md-3 mt-2 ml-2 mr-2 mb-2 folder-item" data-id="<?php echo $row['id'] ?>">
					<div class="card-body">
	<large><span><center><div class="to_folders"> <br><i class="fa fa-user"></i> <?php echo ucwords($row['uname']) ?></div><hr><i class="fa fa-folder"></i></span><b class="to_folder">					<?php echo $row['name'] ?></b></large></center>
					</div>
				</div>
			<?php endwhile; ?>

		</div>


<div class="containe-fluid">
	<?php include('db_connect.php') ;
	$files = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM files f inner join users u on u.id = f.user_id where folder_id = $folder_parent and  f.is_public = 1 and f.dept='csd' order by date(f.date_updated) desc");

	?>
	<div class="row mt-3 ml-3 mr-3">
			<div class="card col-md-12">
				<div class="card-body">
					<table width="100%">
						<tr class="btn-success">
							<th width="20%" class="">Uploader</th>
							<th width="30%" class="">Filename</th>
							<th width="20%" class="">Date</th>
							<th width="30%" class="">Description</th>
						</tr>
						<?php 
					while($row=$files->fetch_assoc()):
						$name = explode(' ||',$row['name']);
						$name = isset($name[1]) ? $name[0] ." (".$name[1].").".$row['file_type'] : $name[0] .".".$row['file_type'];
						$img_arr = array('png','jpg','jpeg','gif','psd','tif');
						$doc_arr =array('doc','docx');
						$pdf_arr =array('pdf','ps','eps','prn');
						$icon ='fa-file';
						if(in_array(strtolower($row['file_type']),$img_arr))
							$icon ='fa-image';
						if(in_array(strtolower($row['file_type']),$doc_arr))
							$icon ='fa-file-word';
						if(in_array(strtolower($row['file_type']),$pdf_arr))
							$icon ='fa-file-pdf';
						if(in_array(strtolower($row['file_type']),['xlsx','xls','xlsm','xlsb','xltm','xlt','xla','xlr']))
							$icon ='fa-file-excel';
						if(in_array(strtolower($row['file_type']),['zip','rar','tar']))
							$icon ='fa-file-archive';

					?>
						<tr class='file-item' data-id="<?php echo $row['id'] ?>" data-name="<?php echo $name ?>"  style="border-top:1px solid gray">
							<td><i><b class="to_files"> <?php echo ucwords($row['uname']) ?></b></i></td>
							<td><large><span><i class="fa <?php echo $icon ?>"></i></span><b class="to_file"> <?php echo $name ?></b></large>
							<input type="text" class="rename_file" value="<?php echo $row['name'] ?>" data-id="<?php echo $row['id'] ?>" data-type="<?php echo $row['file_type'] ?>" style="display: none">

							</td>
							<td><i><?php echo date('Y/m/d h:i A',strtotime($row['date_updated'])) ?></i></td>
							<td><i><?php echo $row['description'] ?></i></td>
						</tr>
							
					<?php endwhile; ?>
					</table>
					
				</div>
			</div>
			
		</div>
	</div>

</div>


<?php endif; ?>

	<!-- Admin for eng accreditors -->


							<?php if($_SESSION['login_type'] == 11): ?>	

<div class="containe-fluid">
	<?php include('db_connect.php') ;
	
	?>
		<div class="row" style="margin-left: 10px">
						<?php 
			$folders = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM folders f inner join users u on u.id = f.user_id where parent_id = $folder_parent and f.is_public = 1 and f.dept='eng'  order by name asc;");


			while($row=$folders->fetch_assoc()):
			?>
				<div class="card col-md-3 mt-2 ml-2 mr-2 mb-2 folder-item" data-id="<?php echo $row['id'] ?>">
					<div class="card-body">
	<large><span><center><div class="to_folders"> <br><i class="fa fa-user"></i> <?php echo ucwords($row['uname']) ?></div><hr><i class="fa fa-folder"></i></span><b class="to_folder">					<?php echo $row['name'] ?></b></large></center>
					</div>
				</div>
			<?php endwhile; ?>

		</div>


<div class="containe-fluid">
	<?php include('db_connect.php') ;
	$files = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM files f inner join users u on u.id = f.user_id where folder_id = $folder_parent and  f.is_public = 1 and f.dept='eng' order by date(f.date_updated) desc");

	?>
	<div class="row mt-3 ml-3 mr-3">
			<div class="card col-md-12">
				<div class="card-body">
					<table width="100%">
						<tr class="btn-success">
							<th width="20%" class="">Uploader</th>
							<th width="30%" class="">Filename</th>
							<th width="20%" class="">Date</th>
							<th width="30%" class="">Description</th>
						</tr>
						<?php 
					while($row=$files->fetch_assoc()):
						$name = explode(' ||',$row['name']);
						$name = isset($name[1]) ? $name[0] ." (".$name[1].").".$row['file_type'] : $name[0] .".".$row['file_type'];
						$img_arr = array('png','jpg','jpeg','gif','psd','tif');
						$doc_arr =array('doc','docx');
						$pdf_arr =array('pdf','ps','eps','prn');
						$icon ='fa-file';
						if(in_array(strtolower($row['file_type']),$img_arr))
							$icon ='fa-image';
						if(in_array(strtolower($row['file_type']),$doc_arr))
							$icon ='fa-file-word';
						if(in_array(strtolower($row['file_type']),$pdf_arr))
							$icon ='fa-file-pdf';
						if(in_array(strtolower($row['file_type']),['xlsx','xls','xlsm','xlsb','xltm','xlt','xla','xlr']))
							$icon ='fa-file-excel';
						if(in_array(strtolower($row['file_type']),['zip','rar','tar']))
							$icon ='fa-file-archive';

					?>
						<tr class='file-item' data-id="<?php echo $row['id'] ?>" data-name="<?php echo $name ?>"  style="border-top:1px solid gray">
							<td><i><b class="to_files"> <?php echo ucwords($row['uname']) ?></b></i></td>
							<td><large><span><i class="fa <?php echo $icon ?>"></i></span><b class="to_file"> <?php echo $name ?></b></large>
							<input type="text" class="rename_file" value="<?php echo $row['name'] ?>" data-id="<?php echo $row['id'] ?>" data-type="<?php echo $row['file_type'] ?>" style="display: none">

							</td>
							<td><i><?php echo date('Y/m/d h:i A',strtotime($row['date_updated'])) ?></i></td>
							<td><i><?php echo $row['description'] ?></i></td>
						</tr>
							
					<?php endwhile; ?>
					</table>
					
				</div>
			</div>
			
		</div>
	</div>

</div>


<?php endif; ?>

	<!-- Admin for tech accreditors -->


							<?php if($_SESSION['login_type'] == 12): ?>	

<div class="containe-fluid">
	<?php include('db_connect.php') ;
	
	?>
		<div class="row" style="margin-left: 10px">
						<?php 
			$folders = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM folders f inner join users u on u.id = f.user_id where parent_id = $folder_parent and f.is_public = 1 and f.dept='tech'  order by name asc;");


			while($row=$folders->fetch_assoc()):
			?>
				<div class="card col-md-3 mt-2 ml-2 mr-2 mb-2 folder-item" data-id="<?php echo $row['id'] ?>">
					<div class="card-body">
	<large><span><center><div class="to_folders"> <br><i class="fa fa-user"></i> <?php echo ucwords($row['uname']) ?></div><hr><i class="fa fa-folder"></i></span><b class="to_folder">					<?php echo $row['name'] ?></b></large></center>
					</div>
				</div>
			<?php endwhile; ?>

		</div>


<div class="containe-fluid">
	<?php include('db_connect.php') ;
	$files = $conn->query("SELECT f.*,u.name as uname,u.dept as udept FROM files f inner join users u on u.id = f.user_id where folder_id = $folder_parent and  f.is_public = 1 and f.dept='tech' order by date(f.date_updated) desc");

	?>
	<div class="row mt-3 ml-3 mr-3">
			<div class="card col-md-12">
				<div class="card-body">
					<table width="100%">
						<tr class="btn-success">
							<th width="20%" class="">Uploader</th>
							<th width="30%" class="">Filename</th>
							<th width="20%" class="">Date</th>
							<th width="30%" class="">Description</th>
						</tr>
						<?php 
					while($row=$files->fetch_assoc()):
						$name = explode(' ||',$row['name']);
						$name = isset($name[1]) ? $name[0] ." (".$name[1].").".$row['file_type'] : $name[0] .".".$row['file_type'];
						$img_arr = array('png','jpg','jpeg','gif','psd','tif');
						$doc_arr =array('doc','docx');
						$pdf_arr =array('pdf','ps','eps','prn');
						$icon ='fa-file';
						if(in_array(strtolower($row['file_type']),$img_arr))
							$icon ='fa-image';
						if(in_array(strtolower($row['file_type']),$doc_arr))
							$icon ='fa-file-word';
						if(in_array(strtolower($row['file_type']),$pdf_arr))
							$icon ='fa-file-pdf';
						if(in_array(strtolower($row['file_type']),['xlsx','xls','xlsm','xlsb','xltm','xlt','xla','xlr']))
							$icon ='fa-file-excel';
						if(in_array(strtolower($row['file_type']),['zip','rar','tar']))
							$icon ='fa-file-archive';

					?>
						<tr class='file-item' data-id="<?php echo $row['id'] ?>" data-name="<?php echo $name ?>"  style="border-top:1px solid gray">
							<td><i><b class="to_files"> <?php echo ucwords($row['uname']) ?></b></i></td>
							<td><large><span><i class="fa <?php echo $icon ?>"></i></span><b class="to_file"> <?php echo $name ?></b></large>
							<input type="text" class="rename_file" value="<?php echo $row['name'] ?>" data-id="<?php echo $row['id'] ?>" data-type="<?php echo $row['file_type'] ?>" style="display: none">

							</td>
							<td><i><?php echo date('Y/m/d h:i A',strtotime($row['date_updated'])) ?></i></td>
							<td><i><?php echo $row['description'] ?></i></td>
						</tr>
							
					<?php endwhile; ?>
					</table>
					
				</div>
			</div>
			
		</div>
	</div>

</div>


<?php endif; ?>
