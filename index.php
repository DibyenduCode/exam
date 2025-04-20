<?php

while(true){
echo "*Instructions*\n";
echo "Enter a list of numbers separated by spaces (e.g., 10 20 30 40).\n";
echo "Enter 'exit' to exit form app\n\n";
$numarray=array();
$inputnums=readline("Enter Numbers: ");

if($inputnums=="exit"){
 break;
}

else{
$numarray=explode(" ",$inputnums);
$total=0;
$flage=true;
foreach($numarray as $num){

if(is_numeric($num)){
$total+=(int)$num;
}
else{
    $flage=false;
}
}

$maxnum=max($numarray);
$minnum=min($numarray);
$average=round($total/(count($numarray)),3);
if($flage==true){
    echo "Maximum:".$maxnum."\n";
    echo "Minimum:".$minnum."\n";
    echo "Sum:".$total."\n";
    echo "Average:".$average."\n";
    readline("Press Enter to Retry");

}
else{
    echo "Re-enter the numbers.Some inputs were not numeric.\n";
    readline("Press Enter to Retry");
}

}
}
?>