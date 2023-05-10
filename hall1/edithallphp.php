<?php include 'inc/session.php';
 include 'inc/dbconection.php';
 $hall=$_SESSION['edithall'];
if(isset($_POST['edit'])){

            $roomtype = $_POST['type'];

            $rname = $_POST['rname'];
            $seats = $_POST['seat'];
            $price = $_POST['price'];
            $rdetail = $_POST['rdetail'];
            $facility = $_POST['facility'];
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
                            header("Location:edithall.php?error=$er");
                        }
                    }
                    else{
                        $er=" There was an error uploading your file.";
                        header("Location:edithall.php?error=$er");
                        }
                }
            else{
               $er= "That type of file are not allowed.";
               header("Location:edithall.php?error=$er");
            }

    
    $quer = "UPDATE hall SET roomtype='{$roomtype}',rname='{$rname}',seats='{$seats}',price='{$price}',rdetail='{$rdetail}',facility='{$facility}',image='{$fileDestination}' WHERE hallsn='{$hall}'";

	$result = mysqli_query($con,$quer); 

	if(!$result){
		echo mysqli_error($con) ;
		echo ('There was an error.');
	}
	else{
		echo ('Hall edit Successfully.');
	}

  //  header("Location:newroom.php");
}

?>