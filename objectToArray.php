<?php

/**
 * CONVERTIR DE OBJETOS A ARRAY RECURSIVAMENTE
 * @author Steven Pardo
 */
function objectToArray ( $var ) {
	$arr = array();

	foreach ( $var as $i=>$v ) {
		$v = is_object( $v ) ? get_object_vars( $v ) : $v ;
		if ( is_array( $v ) ) {
			$arr[$i] = objectToArray( $v );
		} else {
			$arr[$i] = $v ;
		}
	}

	return $arr ;
}

?>