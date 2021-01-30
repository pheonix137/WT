<?php
$states="Mississippi Alabama Texas Massachusetts Kansas";
$stateArray=[];
$states1=explode(' ',$states);
echo "Original Array:<br>";
foreach($states1 as $i=>$value)
print("STATES[$i]=>$value<br>");
foreach($states1 as $state){
if(preg_match('/xas$/',($state)))
$stateArray[0]=($state);
}
foreach($states1 as $state){
if(preg_match('/^K.*s$/i',($state)))
$stateArray[1]=($state);
}
foreach($states1 as $state){
if(preg_match('/^M.*s$/',($state)))
$stateArray[2]=($state);
}
foreach($states1 as $state){
if(preg_match('/a$/',($state)))
$stateArray[3]=($state);
}
echo "Resltant Array:<br>";
foreach($stateArray as $Array=>$value)
print("STATES[$Array]=>$value<br>");
?>