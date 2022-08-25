<?php
	require_once 'config.php';
	
	// exit();
	if(isset($_FILES["file"])){
		 
		if ($_FILES["file"]["error"] > 0) { 
			 echo "Return Code: " . $_FILES["file"]["error"] . "";
		} else { 
				/* echo "Upload: " . $_FILES["file"]["name"] . ""; 
				 echo "Type: " . $_FILES["file"]["type"] . "
				 "; 
				 echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb"; 
					echo "Temp file: " . $_FILES["file"]["tmp_name"] . "";*/

					$filename=date("YmdHis").".png";
				 if (file_exists("upload/" . $filename))
				{
					/*echo $_FILES["file"]["name"] . " already exists. ";*/
				}
				else
				{


				   move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" .$filename );
				   echo $domainname."?p=" . $filename;
				  /* echo "Stored in: " . "upload/" . $_FILES["file"]["name"];*/
				}
		}
		
	}
	else
	{
		echo json_encode(["Please upload a file"]);
	}
 ?>