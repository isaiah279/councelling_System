<?php
// echo" hellowe worldd";
$entered_dates=array(date('10'),date('30'),date('30'),date('33'),date('30'));
//$date=date('2000');
$date_viewed=date('30');
if (!in_array($date_viewed,$entered_dates)){
    $z= $date_viewed+63;
echo $z;
}
 $date="2015-11-17";
 echo date('Y-m-d',strtotime($date.'+5days'));
if (($date==2029 )or ($date==2010) or ($date ==2000)){
    echo date('Y-m-d',strtotime($date.'10days'));
}else{
    echo"not enough";
}
$date="2015-11-17";
echo date('Y-m-d',strtotime($date.'+5days'));
?>