<?php
$image='http://img.gmw.cn/imgsports/attachement/jpg/site2/20140725/f04da226e54a153bf0295e.jpg'; 
$f=fopen($image,'rb');
$dis='img/';
$name='new_file_name.jpg';
$f2=fopen($dis.$name,'wb');

while(!feof($f)){
     fputs($f2,fgetc($f));
 }
            
 fclose($f);
fclose($f2);
?>