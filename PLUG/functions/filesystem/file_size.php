<?php

namespace PLUG;
/**
 * @category PLUG
 * @package functions
 * @subpackage filesystem
 */
 

use PLUG\functions\string\memory_format;
 

/**
 * Utility function formats a string file size description
 * @param string
 * @return string
 */	 
function file_size( $filepath ){
	$n = (float) filesize( $filepath );
	return memory_format( $n );
}
