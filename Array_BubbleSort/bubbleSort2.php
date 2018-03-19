<?php
  function bubbleSort(array $arr)
{
    $n = sizeof($arr);   
    for ($i = 1; $i < $n; $i++) {
        $flag = false;
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }

    return $arr;
}


// Example:
$arr = array(1,2,3,4,5);
$result = bubbleSort($arr);
print_r($result); 
?>

