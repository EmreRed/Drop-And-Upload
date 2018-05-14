<?php
if($_POST){
	
	$base64_image = $_POST['image'];
	$output_without_extension = 'test';
	$path = 'uploaded/';
	
	$splited = explode(',', substr( $base64_image , 5 ) , 2);
    $mime=$splited[0];
    $data=$splited[1];

    $mime_split_without_base64=explode(';', $mime,2);
    $mime_split=explode('/', $mime_split_without_base64[0],2);
    if(count($mime_split)==2)
    {
        $extension=$mime_split[1];
        if($extension=='jpeg')$extension='jpg';
		
        $output=$output_file_without_extension.'.'.$extension;
    }
	
    file_put_contents( $path . $output, base64_decode($data) );
	
	echo 'success';
}
?>