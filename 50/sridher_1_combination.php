<?php
//combination of strings

$str="abc";


combination($str);

function combination($str){
    
    //convert string to array
    //initialise binary digit with len equal to strlength
    //increment binary digit
    //print combinations based on tured on digits
     
    $array=convertArray($str);
    
    $array_count=count($array);
    
    $len=powerof2(2,$array_count);

    $i=0;
    $i++;
    while($i<$len){
        
        $binaryStr=decimaltobinaryString($i);
        
        $binaryArray=convertArray($binaryStr);
    
        printCombination($inputarray,$binaryArray);

        $i++;
    }
}

function powerof2($exp,$len){
    return pow($exp, $len);
}

function decimaltobinaryString($number){
    //return decbin ( $number );
    return str_pad(decbin($number), 3, "0", STR_PAD_LEFT);

}
function printCombination($array,$binaryArray){
    
    for($i=0;$i<count($binaryArray);$i++){
       if($binaryArray[$i]==1){
           echo $array[$i];
       }
    }
    echo "\n";
} 


function convertArray($str){
    return str_split($str);
}