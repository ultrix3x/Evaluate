# Evaluate

The evaluate class is built on the capabilities of output buffering introduced in PHP4.
Normally the output from eval is sent to the client but with this class it is captured and made available for further processing. Otherwise everything is just like eval, well almost :-)

string function streval($code);
The ob_start function initializes the buffering and buffers all output to the client (except for headers). When the processing is done the ob_get_clean() collects the buffer and shuts it down. The result is then returned as a result from the streval function.

The argument $code contains pure php and will (most likely) fail if an attempt is made to process non-php code.


## string function mixeval($str);
The argument $str contains a mix of enclosed php and non-php code. An attempt to pass pure php code to the function will fail since it require all php code to be enclosed with <?php ?> or <? ?>
The mixeval function is the same as calling streval directly with "?>" prepended to the codestring.

## string function mixevalfile($filename);

Reads a file and evaluates it. Pretty much like include but with the output in a variable instead.

Thanks to Thiemo Mättig for improving the mixeval function.