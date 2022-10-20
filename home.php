<?php 
include 'db_connect.php';
$folder_parent = isset($_GET['fid'])? $_GET['fid'] : 0;
 ?>

<style>
	.custom-menu {
        z-index: 1000;
	    position: absolute;
	    background-color: #ffffff;
	    border: 1px solid #0000001c;
	    border-radius: 5px;
	    padding: 8px;
	    min-width: 13vw;
}
a.custom-menu-list {
    width: 100%;
    display: flex;
    color: #4c4b4b;
    font-weight: 600;
    font-size: 1em;
    padding: 1px 11px;
}
	span.card-icon {
    position: absolute;
    font-size: 3em;
    bottom: .2em;
    color: #ffffff80;
}
.file-item{
	cursor: pointer;
}
a.custom-menu-list:hover,.file-item:hover,.file-item.active {
    background: #80808024;
}
table th,td{
	/*border-left:1px solid gray;*/
}
a.custom-menu-list span.icon{
		width:1em;
		margin-right: 5px
}
</style>
<nav aria-label="breadcrumb ">
  <ol class="breadcrumb">
  <li class="breadcrumb-item text-primary ">
      Welcome, <?php echo $_SESSION['login_name'] ?> to BUPC ARMS!
  </li>
  </ol>
</nav>
<nav aria-label="breadcrumb ">
  <ol class="breadcrumb">
  <li class="breadcrumb-item text-primary"><i  class="fa fa-home"></i></li>
  </ol>
</nav>
<div class="containe-fluid">
	<?php include('db_connect.php') ;
	$files = $conn->query("SELECT f.*,u.name as uname FROM files f inner join users u on u.id = f.user_id where  f.is_public = 1 order by date(f.date_updated) desc");

	?>

<div class="row">
             <?php if($_SESSION['login_type'] < 9): ?>     
                        <div class="col-xl-3 col-md-6 mb-4">

                            <div class="card border-left-primary shadow h-100 py-2">

                

                                
                            <a href="index.php?page=files">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               My Folders</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT * FROM folders  where user_id = '".$_SESSION['login_id']."'  order by name asc")->num_rows ?></div>
                                        </div>

                

                                        <div class="col-auto">
                                            <i class="fas fa-folder-minus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>

                            <a href="index.php?page=files">

                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               My Files</div>
                                            <div class="h2 mb-0 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT * FROM files  where  user_id = '".$_SESSION['login_id']."'  order by name asc")->num_rows ?></div>
                                        </div>

                

                                        <div class="col-auto">
                                            <i class="fas fa-file-archive fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>
                            </div>
                        </div>  <?php endif; ?>


<?php   include 'homeaccreditors.php'; ?>

<!-- Admin for EDUC-->

             <?php if($_SESSION['login_type'] == 1): ?>     
                            <a href="index.php?page=file">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Files
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM files f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept='educ'  order by name asc;")->num_rows ?></div>
                                                </div>
                                                <div class="col">
                                                   <!--  <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-import fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?> 


    <!-- Admin for CSD -->

                                  <?php if($_SESSION['login_type'] == 6): ?>     
                            <a href="index.php?page=file">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Files
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM files f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept='csd'  order by name asc;")->num_rows ?></div>
                                                </div>
                                                <div class="col">
                                                   <!--  <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-import fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?> 


    <!-- Admin for ENG -->

                                 <?php if($_SESSION['login_type'] == 7): ?>     
                            <a href="index.php?page=file">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Files
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM files f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept='eng'  order by name asc;")->num_rows ?></div>
                                                </div>
                                               <!--  <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-import fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?> 

    <!-- Admin for TECH -->


                                 <?php if($_SESSION['login_type'] == 8): ?>     
                            <a href="index.php?page=file">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Files
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM files f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept='tech'  order by name asc;")->num_rows ?></div>
                                                </div>
                                               <!--  <div class="col"> -->
                                                   <!--  <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-import fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?> 
                            </div>
                        </div>
<?php  include 'homeaccreditors2.php'; ?>
 <!-- Admin for EDUC -->
    
     <?php if($_SESSION['login_type'] == 1): ?>     
                            <a href="index.php?page=folder">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Folders
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-4 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM folders f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept = 'educ'  order by name asc;")->num_rows ?></div>
                                                </div>
                                                <!-- <div class="col"> -->
                                                  <!--   <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                               <!--  </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?>
    
     <!-- Admin for CSD -->

     <?php if($_SESSION['login_type'] == 6): ?>     
                            <a href="index.php?page=folder">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Folders
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM folders f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept = 'csd'  order by name asc;")->num_rows ?></div>
                                                </div>
                                               <!--  <div class="col"> -->
                                                    <!-- <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?>
    
     <!-- Admin for ENG -->

     <?php if($_SESSION['login_type'] == 7): ?>     
                            <a href="index.php?page=folder">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Folders
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM folders f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept = 'eng'  order by name asc;")->num_rows ?></div>
                                                </div>
                                                <!-- <div class="col"> -->
                                                  <!--   <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?>
    
     <!-- Admin for TECH -->

     <?php if($_SESSION['login_type'] == 8): ?>     
                            <a href="index.php?page=folder">

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                           
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Shared Folders
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h2 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $conn->query("SELECT f.*,u.name as uname FROM folders f inner join users u on u.id = f.user_id where f.is_public = 1 and f.dept = 'tech'  order by name asc;")->num_rows ?></div>
                                                </div>
                                                <!-- <div class="col"> -->
                                                  <!--   <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div> -->
                                                <!-- </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div></a>      <?php endif; ?>
    



                            </div>
                        </div>





<div id="menu-file-clone" style="display: none;">
	<a href="javascript:void(0)" class="custom-menu-list file-option download"><span><i class="fa fa-download"></i> </span>Download</a>
</div>
<script>
	//FILE
	$('.file-item').bind("contextmenu", function(event) { 
    event.preventDefault();

    $('.file-item').removeClass('active')
    $(this).addClass('active')
    $("div.custom-menu").hide();
    var custom =$("<div class='custom-menu file'></div>")
        custom.append($('#menu-file-clone').html())
        custom.find('.download').attr('data-id',$(this).attr('data-id'))
    custom.appendTo("body")
	custom.css({top: event.pageY + "px", left: event.pageX + "px"});

	
	$("div.file.custom-menu .download").click(function(e){
		e.preventDefault()
		window.open('download.php?id='+$(this).attr('data-id'))
	})

	

})
	$(document).bind("click", function(event) {
    $("div.custom-menu").hide();
    $('#file-item').removeClass('active')

});
	$(document).keyup(function(e){

    if(e.keyCode === 27){
        $("div.custom-menu").hide();
    $('#file-item').removeClass('active')

    }
})
</script>