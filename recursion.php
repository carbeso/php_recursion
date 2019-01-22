<?php 

$a = array('a','b','c','d','e');

$result=array();

function x_array($result,$keyList){

    $k = array_shift($keyList);
    print_r($result);
    if($k){
        print_r($k);
        return $result[$k]=x_array($result,$keyList);
    }else{
        print_r("最後一個元素 $k");
        return "你好世界!"; 
    }


}

$xResult = x_array($result,$a);

print_r($xResult);