<?php

function factorial($x){
	    $return = 1;
	    for ($i=2; $i <= $x; $i++) {
	        $return = gmp_mul($return, $i);
	    }
    return gmp_strval($return);
}

?>