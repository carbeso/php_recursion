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

//如果想取得各層的KEY

function print_array_key($arr){
    foreach($arr as $key=>$value){
    if(is_array($value)){
        print_array_key($value);
    }
        print_r($key);
    }
}


print_array_key($xResult);