

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>User</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Login Here" />
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
   
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- jQuery library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
 <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
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
		<div class="box-body" ><br>
      <a href="<?php echo base_url('Login/index');?>" class="btn btn-success pull-right">BACK</a>
    </div>  <br>
            <div class="about-hny-info text-left pr-lg-5">
               <div class="grid-bg text-left mt-5">
			     <div style="display: none;" class="alert alert-success" id="suc_msg">
				  <a href="#" class="close" data-dismiss="alert">&times;</a>
				  <?php echo 'Successfully Added'; ?>
			     </div>
			    <div class="form-group has-feedback">
				
  <div class="box box-primary"> 
   	
    <br>  
    <div class="box-body">
	   <form enctype='multipart/form-data' id='nur_form'>
			<div class="row">
				<div class='col-sm-3'></div>
				<br>
				<div class="col-md-12">
				   <div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Name</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="name" name="name" value="" required pattern="[a-zA-Z ]+">
					    </div>
					</div>
					</div>
					
					<div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Email</label>
					    <div class="col-sm-8">
					      <input type="email"  class="form-control" id="email" name="email" value="" required>
					    </div>
					</div>
				  	</div>
				 </div>
				 
				 <div class="col-md-12">
				   <div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">DOB</label>
					    <div class="col-sm-8">
					      <input type="date" class="form-control" id="dob" name="dob" value="" required>
					    </div>
					</div>
					</div>
					
					<div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Education</label>
					    <div class="col-sm-8">
					      <input type="text"  class="form-control" id="education" name="education" value="" required>
					    </div>
					</div>
				  	</div>
				 </div>
				 
				 <div class="col-md-12">
				   
					<div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Address</label>
					    <div class="col-sm-8">
					      <textarea class="form-control" name="address" id="address"></textarea>
					    </div>
					</div>
				  	</div>
					
					<div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Country</label>
					    <div class="col-sm-8">
					      <select name="country" class="countries form-control" id="countryId" name="countryId" required>
                            <option>Select Country</option>
                          </select>
					    </div>
					</div>
					</div>
				 </div>
				 
				 <div class="col-md-12">
				   
				   
				    <div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">State</label>
					    <div class="col-sm-8">
					     <select name="state" class="states form-control" id="stateId" name="stateId" required>
                         <option>Select State</option>
                         </select>
					    </div>
					</div>
				  	</div>
					
					<div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">City</label>
					    <div class="col-sm-8">
					     <select name="city" class="cities form-control" id="cityId" name="cityId" required>
                          <option>Select City</option>
                         </select>
					    </div>
					</div>
				  	</div>
					
					
				 </div>
				 
				 <div class="col-md-12">
				 
				 <div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Pin Code</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="pincode" name="pincode" value="" required>
					    </div>
					</div>
					</div>
					
				   <div class="col-md-6">
				   <div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Status</label>
					    <div class="col-sm-8">
					                
							      	 <input type="radio" name='status' id="status" value="active" onclick="studentdata(this.value)"> Active &nbsp;&nbsp;
									 <input type="radio" name='status' id="status" value="deactive" onclick="studentdata(this.value)"> Deactive &nbsp;&nbsp;
							  
					    </div>
					</div>
					</div>
					
				 </div>
				 <div class="col-md-12">
				 <div class="col-md-6">
				  	<div class="form-group row">
					    <label for="staticEmail" class="col-sm-4 col-form-label">Profile Pic</label>
					    <div class="col-sm-8">
					      <input  type="file" name="file[]" id="filePHOTO" class="img">
					    </div>
					</div>
				  	</div>
					</div>
		    </div>
	        <div class="row" style="padding-top:2%">
                    <div class="col-lg-12" style="text-align:center">
                        <button type="submit" class="btn btn-warning btn-sm" id="process_sub">Save User</button>
                    </div>
                </div>
	    </form>
    </div>   
  </div>
</div>
			   
			   
</div></div></div>
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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149371669-1"></script>
<script>
setTimeout(function(){
  $('#suc_msg').fadeOut("slow");
}, 3000);

	$("#nur_form").on("submit", function (event) {
    event.preventDefault();
	//$("#sv_btn").prop('disabled',true);
	//$("#process").show();
	var formData = new FormData(this);
    $.ajax({
			url: "<?php echo base_url('Login/save'); ?>",
			type: "POST",
			data:formData,
            cache:false,
            contentType: false,
            processData: false,
			success: function(data){
				
				window.location="<?php echo base_url('Login/index'); ?>";
			}
		});
	 });
	
	$("#filePHOTO").change(function(){
		var file_size = $('#filePHOTO')[0].files[0].size;
		var ext = $('#filePHOTO').val().split('.').pop().toLowerCase();
			if(file_size > 1048576 || (ext != 'jpg') && (ext != 'jpeg') && (ext != 'doc') && (ext != 'docx') && (ext != 'png') && (ext != 'txt') && (ext != 'pdf')){
				alert('File size must be less than 1000kb and only allowed jpg,jpeg,png,doc,docx,pdf,txt format');
				$("#filePHOTO").val('');
			}
		return true;
	});
</script>
<script>


  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149371669-1');

   
function ajaxCall() {
    this.send = function(data, url, method, success, type) {
        type = type||'json';
        var successRes = function(data) {
            success(data);
        }

        var errorRes = function(e) {
            console.log(e);
            //alert("Error found \nError Code: "+e.status+" \nError Message: "+e.statusText);
            //jQuery('#loader').modal('hide');
        }
        jQuery.ajax({
            url: url,
            type: method,
            data: data,
            success: successRes,
            error: errorRes,
            dataType: type,
            timeout: 60000
        });

    }

}

function locationInfo() {
    var rootUrl = "https://geodata.solutions/api/api.php";
    //now check for set values
    var addParams = '';
    if(jQuery("#gds_appid").length > 0) {
        addParams += '&appid=' + jQuery("#gds_appid").val();
    }
    if(jQuery("#gds_hash").length > 0) {
        addParams += '&hash=' + jQuery("#gds_hash").val();
    }

    var call = new ajaxCall();

    this.confCity = function(id) {
     //   console.log(id);
     //   console.log('started');
        var url = rootUrl+'?type=confCity&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + jQuery('#stateId option:selected').attr('stateid') + '&cityId=' + id;
        var method = "post";
        var data = {};
        call.send(data, url, method, function(data) {
            if(data){
                //    alert(data);
            }
            else{
                //   alert('No data');
            }
        });
    };


    this.getCities = function(id) {
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#cityId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getCities&countryId='+ jQuery('#countryId option:selected').attr('countryid') +'&stateId=' + id + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.cities').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.cities').find("option:eq(0)").html("Select City");
            if(data.tp == 1){
                var listlen = Object.keys(data['result']).length;

                if(listlen > 0)
                {
                    jQuery.each(data['result'], function(key, val) {

                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        jQuery('.cities').append(option);
                    });
                }
                else
                {
                    var usestate = jQuery('#stateId option:selected').val();
                    var option = jQuery('<option />');
                    option.attr('value', usestate).text(usestate);
                    option.attr('selected', 'selected');
                    jQuery('.cities').append(option);
                }

                jQuery(".cities").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getStates = function(id) {
        jQuery(".states option:gt(0)").remove();
        jQuery(".cities option:gt(0)").remove();
        //get additional fields
        var stateClasses = jQuery('#stateId').attr('class');

        var cC = stateClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }
        var url = rootUrl+'?type=getStates&countryId=' + id + addParams  + addClasses;
        var method = "post";
        var data = {};
        jQuery('.states').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.states').find("option:eq(0)").html("Select State");
            if(data.tp == 1){
                jQuery.each(data['result'], function(key, val) {
                    var option = jQuery('<option />');
                    option.attr('value', val).text(val);
                    option.attr('stateid', key);
                    jQuery('.states').append(option);
                });
                jQuery(".states").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

    this.getCountries = function() {
        //get additional fields
        var countryClasses = jQuery('#countryId').attr('class');

        var cC = countryClasses.split(" ");
        cC.shift();
        var addClasses = '';
        if(cC.length > 0)
        {
            acC = cC.join();
            addClasses = '&addClasses=' + encodeURIComponent(acC);
        }

        var presel = false;
        var iip = 'N';
        jQuery.each(cC, function( index, value ) {
            if (value.match("^presel-")) {
                presel = value.substring(7);

            }
            if(value.match("^presel-byi"))
            {
                var iip = 'Y';
            }
        });


        var url = rootUrl+'?type=getCountries' + addParams + addClasses;
        var method = "post";
        var data = {};
        jQuery('.countries').find("option:eq(0)").html("Please wait..");
        call.send(data, url, method, function(data) {
            jQuery('.countries').find("option:eq(0)").html("Select Country");

            if(data.tp == 1){
                if(presel == 'byip')
                {
                    presel = data['presel'];
                    console.log('2 presel is set as ' + presel);
                }


                if(jQuery.inArray("group-continents",cC) > -1)
                {
                    var $select = jQuery('.countries');
                    console.log(data['result']);
                    jQuery.each(data['result'], function(i, optgroups) {
                        var $optgroup = jQuery("<optgroup>", {label: i});
                        if(optgroups.length > 0)
                        {
                            $optgroup.appendTo($select);
                        }

                        jQuery.each(optgroups, function(groupName, options) {
                            var coption = jQuery('<option />');
                            coption.attr('value', options.name).text(options.name);
                            coption.attr('countryid', options.id);
                            if(presel) {
                                if (presel.toUpperCase() == options.id) {
                                    coption.attr('selected', 'selected');
                                }
                            }
                            coption.appendTo($optgroup);
                        });
                    });
                }
                else
                {
                    jQuery.each(data['result'], function(key, val) {
                        var option = jQuery('<option />');
                        option.attr('value', val).text(val);
                        option.attr('countryid', key);
                        if(presel)
                        {
                            if(presel.toUpperCase() ==  key)
                            {
                                option.attr('selected', 'selected');
                            }
                        }
                        jQuery('.countries').append(option);
                    });
                }
                if(presel)
                {
                    jQuery('.countries').trigger('change');
                }
                jQuery(".countries").prop("disabled",false);
            }
            else{
                alert(data.msg);
            }
        });
    };

}

jQuery(function() {
    var loc = new locationInfo();
    loc.getCountries();
    jQuery(".countries").on("change", function(ev) {
        var countryId = jQuery("option:selected", this).attr('countryid');
        if(countryId != ''){
            loc.getStates(countryId);
        }
        else{
            jQuery(".states option:gt(0)").remove();
        }
    });
    jQuery(".states").on("change", function(ev) {
        var stateId = jQuery("option:selected", this).attr('stateid');
        if(stateId != ''){
            loc.getCities(stateId);
        }
        else{
            jQuery(".cities option:gt(0)").remove();
        }
    });

    jQuery(".cities").on("change", function(ev) {
        var cityId = jQuery("option:selected", this).val();
        if(cityId != ''){
            loc.confCity(cityId);
        }
    });
});



</script>