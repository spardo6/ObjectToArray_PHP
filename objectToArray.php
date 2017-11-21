<?php

/**
 * CONVERTIR OBJETO EN ARRAY RECURSIVAMENTE
 * @author Steven Pardo
 */
function objectToArray($object) {
	$response = array();

	foreach($object as $i => $item) {
		$object = is_object($v) ? get_object_vars($item) : $item;
		
		if(is_array($item)) {
			$response[$i] = objectToArray($item);
		} else {
			$response[$i] = $item;
		}
	}

	return $response;
}
