<?php

if(isset($_FILES['file']['name'])){

   /* Getting file name */
   $filename = $_FILES['file']['name'];
    
   /* Location */
   $location = "upload/".$filename;
   $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
   $imageFileType = strtolower($imageFileType);

   /* Valid extensions */
   $valid_extensions = array("jpg","jpeg","png");

   $response = 0;
   /* Check file extension */
   if(in_array(strtolower($imageFileType), $valid_extensions)) {
      /* Upload file */
      $new_filename  =md5($filename);
      if(move_uploaded_file($_FILES['file']['tmp_name'],'upload/'.$new_filename.'.png')){
         $response = $new_filename.'.png';
      }
   }

   echo $response;
   exit;
}

echo 0;