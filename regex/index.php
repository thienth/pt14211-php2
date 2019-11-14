<?php 

$pattern = '/[a-z]/';
$subject = '32f';
if (preg_match($pattern, $subject)){
    echo 'Chuỗi regex so khớp';
}else{
	echo "chuỗi không khớp";
}
 ?>
