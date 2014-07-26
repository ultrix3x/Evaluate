<?php
// Thanks to Thiemo Mättig for the help to 
// make the code better and more effective
class evaluate {
 
 // Constructor
 function evaluate() {
   register_shutdown_function(array(&$this, "finalize"));
 }
 
 // PHP stylish destructor
 function finalize() {
 }
 
 // Evaluate a string by capturing the output
 function streval($code) {
   ob_start();
   eval($code);
   $output = ob_get_contents();
   ob_end_clean();
   return $output;
 }
 
 // Extract and evaluate php code
 function mixeval($str) {
   return $this->streval("?>" . $code);
 }
 
 
 // Evaluate a whole file
 function mixevalfile($filename) {
   if (! file_exists($filename)) return false;
   return $this->mixeval(file_get_contents($filename));
 }
 
}
?>