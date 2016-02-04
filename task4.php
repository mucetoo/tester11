<?php
$p1=(0.10);
$p2=(0.15);
$p3=(0.25);
$p4=(0.35);
$el=300;
$vat=20;
$bill1=$p1*50;
$bill2=$p2*100;
$bill3=$p3*100;
$bill4=$p4*50;
$bill=($bill1+$bill2+$bill3+$bill4)*1.20;

echo 'p='.$p1.'lv , p='.$p2.'lv , p='.$p3.'lv , p='.$p4.'lv , el='.$el.'kwh and VAT='.$vat.'%';
echo '<p>'.$bill1.' lv </p>';
echo '<p>'.$bill2.' lv </p>';
echo '<p>'.$bill3.' lv </p>';
echo '<p>'.$bill4.' lv </p>';
echo "The bill is $bill.";
?>

