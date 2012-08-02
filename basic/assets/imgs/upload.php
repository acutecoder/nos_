<?php
if(!empty($_FILES)){
	
	
				 $tmpfile = $_FILES['Filedata']['tmp_name'];
				
				//$fileName = $_FILES['Filedata']['name'];
				
				//$dir = dirname(__FILE__) ;
				
  				$targetfile = dirname(__FILE__) ."/". $_FILES['Filedata']['name'];

    			move_uploaded_file($tmpfile, $targetfile);
				
				//rename($targetfile,$dir."pics/".$fileName);
}
?>