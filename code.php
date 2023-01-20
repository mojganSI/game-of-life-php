<?php 

function display($t){}
function print_state($t){
  foreach($t as $idx => $value){
    echo " ";
    echo $value ? "o" : "x";
  }
  echo "\n";
}
$state = [];
for($i=0 ; $i<10; $i++){
  $state[$i] = rand(0,1); 
}

display($state);

function state_cell($t){
  for($i=0 ; $i<count($t); $i++){
    if(($t [0] =="x" && $t [2] == "o") || 
       ($t [0] =="o" && $t [2] == "x")){
      $t[1] == "o";
       }
    else{
       $t[1] == "x";
    }
  }
}


?>