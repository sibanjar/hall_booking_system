<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		KHEC-Change_Password
	</title>
	<?php require('inc/link.php');?>
	<style type="text/css">
		.field_error{
			color: red;
		}
	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body class="bg-light">
	<?php require('inc/user_header.php');?>
	<div class="my-5 px-4">
    	<h2 class=" mb-2 text-center fw-bold h-font">CHANGE PASSWORD</h2>
    	<div class="h-line bg-dark"><b></div><br>

<div class="container">
<div class="col-lg-6 col-md-6 px-4">
		    	<div class="bg-white rounded shadow p-4">
		    	
		    			 <div class="mt-3">
		              <label class="form-label"style="font-weight: 500;">Current Password</label>
		              <input type="password" id="current_password" name="current_password" class="form-control shadow-none">
		              <span id="current_password_error" class="field_error"></span>

               </div>

               <div class="mt-3">
		              <label class="form-label"style="font-weight: 500;">New Password</label>
		              <input type="password" id="new_password" name="new_password" class="form-control shadow-none">
		              <span id="new_password_error" class="field_error"></span>
               </div>

               <div class="mt-3">
		              <label class="form-label"style="font-weight: 500;">Confirm Password</label>
		              <input type="password" id="confirm_password" name="confirm_password" class="form-control shadow-none">
		              <span id="confirm_password_error" class="field_error"></span>

               </div>

               <span id="password_error"></span>
          <button type="submit" id="update_password" onclick="update_password();" name="login" class="btn text-white custom-bg mt-3">UPDATE</button>
		    	
			   	</div>
		</div>
</div>
</div>
<script type="text/javascript">
	function update_password(){
		jQuery('.field_error').html('');
      //jQuery('#email_error').html('');
      var current_password=jQuery('#current_password').val();
      var new_password=jQuery('#new_password').val();
      var l1=new_password.length;
      var confirm_password=jQuery('#confirm_password').val();
      var l2=confirm_password.length;
      var is_error='';
      if(current_password=='')
      {jQuery('#current_password_error').html('Please enter Password');
  is_error='yes';
      }
      if(new_password=='')
      {jQuery('#new_password_error').html('Please enter Password');
  is_error='yes';
      }
      if(confirm_password=='')
      {jQuery('#confirm_password_error').html('Please enter Password');
  is_error='yes';
      }

    if(l1<8){
     jQuery('#new_password_error').html('Password should be more than 8 characters');
  is_error='yes';
      
   }

    if(l2<8){
     jQuery('#confirm_password_error').html('Password should be more than 8 characters');
  is_error='yes';
      
   }
if(new_password!=''&& confirm_password!==''&&new_password!=confirm_password)
{
jQuery('#confirm_password_error').html('Please enter same password');
  is_error='yes';

}
if(is_error==''){
	jQuery('#update_password').html('please Wait....');
      		jQuery('#update_password').attr('disabled',true);
      		
      	jQuery.ajax({
      		url:'update_password.php',
      		type:'post',
      		data:'current_password='+current_password+'&new_password='+new_password,
      		 		success:function(result){
      			//jQuery('#email2').val('');
      			jQuery('#current_password_error').html(result);
      			jQuery('#update_password').html('UPDATE');
      		jQuery('#update_password').attr('disabled',false);
      		jQuery('#current_password').val('');
					jQuery('#new_password').val('');
    jQuery('#confirm_password').val('');
      	  //jQuery('#form_id')[0].reset();
      		}
      	})
        
}
     }

</script>
</body>
</html>
<?php require('inc/footer.php');?>