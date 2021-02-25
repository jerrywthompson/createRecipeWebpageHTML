
<?php

########################################################################
#       Strip punctuation from a strip           #
########################################################################

function funcStripPunctuation($data_string)
{

	$clean_string = preg_replace('/[^\w]+/', '_', $data_string);
	return($clean_string);	

}



?>