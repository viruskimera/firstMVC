<?php

class Show
{
	function frontEnd( $view_name, $params ){

		if( is_array( $params ) ){
			extract( $params );

		}
		include 'views/' . $view_name;
	}
}