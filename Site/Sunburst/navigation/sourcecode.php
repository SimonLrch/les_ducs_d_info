<?php
	switch($_POST["functionName"]){ 
        case 'getContent': 
            getContent();
            break; 
		case 'default':
			 echo 'Function not found';
    }   
	function getContent() {
    		$filestring = file_get_contents($_POST["args"]);
			$filearray = explode("\n", $filestring);
			while (list($var, $val) = each($filearray)) {
			++$var;
			$val = strtr((String)$val, "\"", "'");
			$val =  $val."\n";
			echo $val;

		}}
?>
				