 <?php
 function compress($source,$destination,$quality)
 {
	 $info=getimagesize($source)
	 if($info['mime']=='image/jpeg')
	 $image=imagecreatefromjpeg($source);
	 imagejpeg($image,$destination,$quality);
	 return $destination;
 }
 
 
 
 ?>