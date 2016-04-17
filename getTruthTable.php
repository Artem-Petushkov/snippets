<?php 
//Генерация таблицы булевых значений
//например
//  0 0 0
//  0 0 1
//  0 1 0 
//  0 1 1 
//  1 0 0 
//  1 0 1 
//  1 1 0 
//  1 1 1 
function getTruthTable($rows) {
    $rows = intval($rows);
    if( $rows <=1){
        throw new Exception('Rows must be greater than 1');
    }
    else{
        $result = array();
        $length = pow(2, $rows);
       
        for($i = 1; $i <= $rows; $i++){
           $val = 0;
           $divider = $length / pow(2, $i);
           for($j = 0; $j <$length;$j++){
               $result[$i-1][$j] =  ($val /$divider)%2;
               $val++;
           }
        }
        return $result;
    }
    
    
}


?>