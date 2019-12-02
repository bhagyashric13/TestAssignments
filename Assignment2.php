<?php 
function check($s) 
{
    $msg=strtolower($s);	 
    $lengh = strlen($msg); //Length of string
    $arryl = array('l','o','v','e');
    $c = 0; 
    if($lengh >1 && $lengh <= 100){
    	for ($i = 0; $i<$lengh; $i++)  
    	{   
	        if ($msg[$i] == $arryl[$c])  
	        { 
		$c++;
	        }        
	        if($c==count($arryl)) break;
    	} 
    }
    if($c==count($arryl))
        echo "I love you, too!";
   else
       echo "Let us breakup!";
    return 0;
} 
  
$s = "vvLo3333333asdafajlvfegnkdfn33333e"; 
  
// function call 
check($s);
?>
