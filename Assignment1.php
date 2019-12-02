<?php 
function check($s)
{ 
    $l = strlen($s); 
  	if(BinaryOrNot($s) && is_numeric($s) && $l>0 && $l <= 100){
                    $c1 = 0; 
	    for ($i = 0; $i<$l; $i++)  
	    { 
	  
	        if ($s[$i] == $s[$i+1])  
	        { 
	            $c1++;  
	        } 
	        else 
	        { 
	            $c1 = 0; 
	        } 
	       if($c1==5) break;
	    } 
	    if($c1==5)
	      echo "Sorry, sorry!";
	   else
	     echo "Good luck!";
	    return 0;
  	}
	else {

	      echo "Please enter valid binary sting";
	
              }    
} 
 
function BinaryOrNot($number) 
{ 
    while ($number > 0)  
    { 
        $digit = $number % 10; 
  
        if ($digit > 1) 
            return false; 
        $number /= 10; 
    } 
    return true; 
}  

$s = "0000011111110"; 
  
// function call 
check($s);

?>

