<?php 
 include 'inc/dbconection.php';

if(isset($_POST['addr'])){

            $roomtype = $_POST['type'];
        
            $rname = $_POST['rname'];
            $seats = $_POST['seat'];
            $price = $_POST['price'];
            $rdetail = $_POST['rdetail'];
            $facility = $_POST['facility'];
            $price1 = $_POST['price1'];
            $file =$_FILES['file']; 
            
            


            $filename = $file['name'];
            $fileTmpname = $file['tmp_name'];
            $fileSize = $file['size'];
            $fileError = $file['error'];
            $fileType = $file['type'];

            $fileExt = explode('.',$filename);
            $fileActualExt = strtolower(end($fileExt));
        
            $allow = array('jpg','jpeg','png');
            if(in_array($fileActualExt,$allow)){
                    if($fileError === 0){
                        if($fileSize < 10000000){
                            $fileNewName =uniqid('IMG-',true).".".$fileActualExt;
                            $fileDestination = 'images/'.$fileNewName;

                            move_uploaded_file($fileTmpname,$fileDestination);
                            //return $fileDestination;
                            
                        }
                        else{
                            $er= "your file is too big.";
                            header("Location:halladd.php?error=$er");
                        }
                    }
                    else{
                        $er=" There was an error uploading your file.";
                        header("Location:halladd.php?error=$er");
                        }
                }
            else{
               $er= "That type of file are not allowed.";
               header("Location:halladd.php?error=$er");
            }


   
	$q = "INSERT INTO hall VALUES(NULL,'$roomtype','$rname','$seats','$price','$rdetail','$facility','$fileDestination','$price1')";

	$result = mysqli_query($con, $q);
      mysqli_close($con); 

	if($result){
        $er="Hall Added Successfully";
               header("Location:halladd.php?error=$er");
		
	}
	else{
		echo ('There was an error.');
	}

  //  header("Location:newroom.php");
}

?>