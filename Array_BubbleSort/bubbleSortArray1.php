$array=[5,4,3,2,1];
 
for($i = 0; $i < 4; $i++) {
  for($j=$i+1;$j<5;++$j){
      if($array[$i]>$array[$j]){
       $temp=$array[$i];
       $array[$i]=$array[$j];
       $array[$j]=$temp;
     
           }
 }
   
}
 
print_r ($array);
