
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login User</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login User" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" type="text/css" media="all" />

    <link href="<?php echo base_url('assets/css/font-awesome.css'); ?>" rel="stylesheet">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

</head>

<body>
    
    <div id="home" class="inner-w3pvt-page">
        <div class="overlay-innerpage">
            
            <div class="top_w3pvt_main container">
                
                <header class="nav_w3pvt text-center">
                   
                    <nav class="wthree-w3ls">
                        <div id="logo">
                            
                        </div>

                    </nav>
                    
                </header>
                
            </div>
           
        </div>
    </div>
    
<section class="about py-5">
<div class="box-body" >
<a href="<?php echo base_url('Google_login/logout');?>" class="btn btn-primary pull-right" style="margin-right:50px;">Logout</a>

      
    </div>  <br>
        <div class="container py-md-5">
            <div class="about-hny-info text-left pr-lg-5">
               <div class="grid-bg text-left mt-5">
			   
                    <div class="grid-inner p-5">
					
                <div class="jumbotron">
<a href="<?php echo base_url('Login/add_user');?>" class="btn btn-success pull-right" style="margin-right:50px;">Add User</a>
                   <br>
            <div class="about-hny-info text-left pr-lg-5">
               <div class="grid-bg text-left mt-5">
			   
			    <div class="form-group has-feedback">
				
  <div class="box box-primary"> 
   	
    <br>  
    <div class="box-body">
	    <div class="table-responsive">
        <table class="table table-bordered table-striped" id="user">
          <thead style="background:#99ceff;">
            <tr>
              <th style="border-bottom:0px">S.No.</th>
              <th style="border-bottom:0px">Name</th>
              <th style="border-bottom:0px">Email</th>
              <th style="border-bottom:0px">Age</th>
              <th style="border-bottom:0px">Status</th>
			  <th style="border-bottom:0px">Profile Pic</th>
              <th style="border-bottom:0px">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
			   $i = 1;
			   foreach($user_data as $value){
				   
				   $dob = $value->dob;
                   $age = (date('Y') - date('Y',strtotime($dob)));
                   ?>
				   
				      
				   
				     <tr>
					   <td><?php echo $i; ?></td>
					   <td><?php echo $value->name; ?></td>
					   <td><?php echo $value->email; ?></td>
					   <td><?php echo $age; ?> year</td>
					   <td><?php echo $value->status; ?></td>
					   <td><img src="<?= base_url() ?><?=$value->pic;?>" width="70" height="60" class="img-responsive img-circle img-thumbnail"></td>
					   <td>
						   <a href="<?php echo base_url('Login/edit/'.$value->id); ?>"><button class='btn btn-success btn-xs'><i class="fa fa-pencil-square-o" data-toggle="tooltip" data-placement="left" title="EDIT"></i></button></a>
						   
						   <button class='btn btn-danger btn-xs' onclick="del(<?php echo $value->id; ?>)" data-toggle="tooltip" data-placement="right" title="DELETE"><i class="fa fa-trash"></i></button>
					   </td>
				     </tr>
				   <?php
				   $i++;
			   }
			 ?>
          </tbody>
        </table>
      </div>
    </div>   
  </div>
</div>
			   
			   
</div></div>
                


                </div>
				</div>
				</div>
            </div>
        </div>
    </section>
    
    <div class="copy_right p-3 d-flex">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-9 copy_w3pvt">
                    <p class="text-lg-left text-center">© 2022. All rights reserved </p>

                </div>
                
                <div class="col-lg-3 move-top text-lg-right text-center">
                    <a href="#home" class="move-top">
                        <span class="fa fa-angle-double-up mt-3" aria-hidden="true"></span>
                    </a>
                </div>
                
            </div>
        </div>

    </div>
  
</body>

</html>
<script>
$(document).ready(function() {
    $('#user').DataTable();
} );

function del(val){
	var cnf = confirm("Are you sure want to delete");
	var id = val;
	if(cnf == true){
		$.post("<?php echo base_url('Login/del'); ?>",{id:id},function(data){
			location.reload();
		});
	}
}
</script>