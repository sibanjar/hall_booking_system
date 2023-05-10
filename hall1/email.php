<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<?php require('inc/link.php');?>
	<meta charset="utf-8">
	<title>email</title>
	<style type="text/css">
		.email_verify_otp{
			display: none;
		}
	</style>
</head>
<body>
<!--email-->
		<input type="email" name="email" id="email" placeholder="enter email">
		<button type="button" class="fv-btn email_sent_otp" onclick="email_sent_otp()">send otp</button>

		<input type="text" id="email_otp" placeholder="enter otp" class="email_verify_otp">
		<button type="button"  onclick="email_verify_otp()" class="fv-btn email_verify_otp">Verify otp</button>
		<span id="email_otp_result"></span><br>
		<span id="email_error"></span>
		<br><br>


		<button type="button" disabled id="register">register</button>

		<input type="textbox" id="is_email_verified" hidden />



<!--mobile
		<input type="number" name="mobile" id="mobile" placeholder="enter number">
		<button type="button" class="fv-btn mobile_sent_otp" onclick="mobile_sent_otp()">send otp</button>

		<input type="number" id="mobile_otp" placeholder="enter otp" class="mobile_verify_otp">
		<button type="button"  onclick="mobile_verify_otp()" class="fv-btn mobile_verify_otp">Verify otp</button>
		<span id="mobile_otp_result"></span><br>
		<span id="mobile_error"></span>-->




<script type="text/javascript">
	function email_sent_otp(){
		jQuery('#email_error').html('');
		var email=jQuery('#email').val();
		if(email=='')
		{jQuery('#email_error').html('Please enter email id');


		}
		else{
			jQuery('.email_sent_otp').html('Please Wait...');
			jQuery('.email_sent_otp').attr('disabled',true);
			jQuery('.email_sent_otp');
			jQuery.ajax({
				url:'send_otp.php',
				type:'post',
				data:'email='+email+'&type=email',
				success:function(result){
					result=result.trim();
					if(result=='done') {
						//jQuery('#email_error').html('done');
						
					
						
					}
					else{
						jQuery('.email_sent_otp').html('send otp');
			jQuery('.email_sent_otp').attr('disabled',false);
			
						jQuery('#email').attr('disabled',true);
						jQuery('.email_verify_otp').show();
						jQuery('.email_sent_otp').hide();
						

						//jQuery('#email_error').html('Please try after sometime');
						
					}

				}

			});
		}
	}

	function email_verify_otp(){
		jQuery('#email_error').html('');
		var email_otp=jQuery('#email_otp').val();
		if(email_otp=='')
		{jQuery('#email_error').html('Please enter otp');


		}
		else{jQuery.ajax({
				url:'check_otp.php',
				type:'post',
				data:'otp='+email_otp+'&type=email',
				success:function(result){
					if (result=='done') {
						jQuery('.email_verify_otp').hide();
		                jQuery('#email_otp_result').html('Email id Verified');
		                jQuery('#is_email_verified').val('1');
		                if(jQuery('#is_email_verified').val()==1)
		                {
		                	jQuery('#register').attr('disabled',false);
		                }
		
					}
					else{
						jQuery('#email_error').html('Please enter valid otp');
					}

				}

			});
		

		}
	}






</script>
</body>
</html>