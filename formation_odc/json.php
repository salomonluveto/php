<?php 
/*$a = array ("sarah"=>25, "jules"=>33);
echo json_encode($a);

$b = array("volvo","bmw");
echo json_encode($a);
*/
/*
$c = '{"Sarah":25,"jules":33,"joe":43}';
print_r(json_decode($c));
$d = '{"Sarah":25,"jules":33,"joe":43}';
print_r(json_decode($c,true));
*/
$c = '{"Sarah":25,"jules":33,"joe":43}';
$o = json_decode($c);
echo $o->Sarah."<br>";
echo $o->jules;
?>