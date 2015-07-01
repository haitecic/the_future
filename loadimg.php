<?php
$image='https://bhuntr.com/sites/all/themes/kate/logo.png'; 
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