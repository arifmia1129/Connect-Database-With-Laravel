<?php

function resultCalculate($marks) {
    if($marks < 33) {
        $result = 'Failed';
    }else{
        $result = 'Passed';
    }
    return $result;
}

?>
