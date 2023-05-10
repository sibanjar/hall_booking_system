<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>KHEC-Forget_Password</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php require('inc/link.php');?>
</head>
<body class="bg-light">
	<?php require('inc/header.php');?>
<div class="my-5 px-4">
    <h2 class=" mb-2 text-center fw-bold h-font">FORGOT PASSWORD</h2>
    <div class="h-line bg-dark"></div>
    <br>



    <div class="col-lg-6 col-md-6 px-4">
          <div class="bg-white rounded shadow p-4">
            <form>
               <div class="mt-3">
                 <label class="form-label">Enter Email</label>
    <input type="email" placeholder="Enter Email" class="form-control shadow-none" id="email2" name="email" required>  <span id="email_error" style="color:red;" ></span>
     <br> 
              <button type="submit" class="btn btn-dark shadow-none" onclick="forget_password()" id="btn_submit">Submit</button>
    
               </div>
</form>
</div>
</div>
<!--

  <div class="modal-dialog modal-lg shadow">
    <div class="modal-content">

  <div class="container shadow align-items-center px-4">
          <div class="row">
            <div class="col-md-6 ps-0 mb-3"> 
             </div>
      </div>
</div>
        </div>
  </div>     
	
</div>-->
<script type="text/javascript">
function forget_password(){
      jQuery('#email_error').html('');
      var email=jQuery('#email2').val();
      if(email=='')
      {jQuery('#email_error').html('Please enter email id');
      }
      else{
      	jQuery('#btn_submit').html('please Wait....');
      		jQuery('#btn_submit').attr('disabled',true);
      		
      	jQuery.ajax({
      		url:'forget_password_submit.php',
      		type:'post',
      		data:'email='+email+'&type=email',
      		success:function(result){
      			jQuery('#email2').val('');
      			jQuery('#email_error').html(result);
      			jQuery('#btn_submit').html('Submit');
      		jQuery('#btn_submit').attr('disabled',false);
      	
      		}
      	})
        }
   }
</script>
</body>
</html>
<?php require('inc/footer.php');?>