<?php
/*numeric array.
$arr=["One","Two","Three","Four"];
print_r($arr);

$arr1=[];
$arr1[]="One";
$arr1[]="Two";
$arr1[]="Three";
$arr1[]="Four";

foreach ($arr as $val){
    echo "<br>".$value;
}
foreach($arr1 as $item):
    echo "<br>".$item;
endforeach;*/


/*Associate Array*/
$arr=[];
$arr["Name"]="Si Thu";
$arr["Email"]="home123@email.com";
$arr["Address"]="Yangon";
 $arr1=["Name"=>"De ye linn","Email"=>"computer@php.com","Address"=>"Mandalay"];

foreach ($arr as $val) {
    echo $val."<br>";
 }
 foreach ($arr1 as $key=>$record):
 echo "<br>".$key. "=" .$record;
 endforeach;