<?php
/**
 * Please do not edit any of the code except what is needed.
 * We are running unit tests against the code.
 */

/** QUESTION 1/ Shafira's answer one **/ 

// Correct the following snippet that depends on jQuery.
/**
 * Add_custom_script
 * 
 *
 * @return Array $enqueue_array.
 */
add_action( 'enqueue_array', 'add_custom_script' );
function add_custom_script() {
	enqueue_array(
		'jquery-custom-script',
		get_template_directory_uri() .'js/jquery-custom-script.js',
		array('jquery'),
		false,
		false,
	);

	// For Testing Purposes. Do not edit.
	return $enqueue_array;
}

// QUESTION 2// Shafira's answer two

// Please change the code below to make this database query the WordPress way, and to also secure it against SQL injection.

/**
 * Perform_database_action
 * 
 *
 * @return string $result.
 */
function perform_database_action(){

    global $wpdb;
	$value1 = 'string';
	$value2 = 4;
	$value3 = 'string';
    $statement= array('col1'=>$value1,'col2'=>$value2,'col3'=>$value3);
    $format = array('%s','%s','%s');
    $wpdb->insert('table_name', $statement, $format);

	// For testing purposes. Do not edit.
	return $statement;

}


// Bonus PHP/WordPress questions.

// How would you sanitize an integer to prevent JavaScript injections?

/**
 * Answer_three
 *
 * @param  mixed $value The value to sanitize.
 *
 * @return int $value.
 */
function answer_three( $value ) {
	$value = '4';

	// For testing purposes. Do not edit.
	return $value;
}

// How would you sanitize a text string using core WordPress methods??

/**
 * Shafira's Answer_four
 *
 *
 * @param  mixed $value The value to sanitize.
 *
 * @return mixed $value.
 */
function answer_four( $value ) {
	$filtered = answer_four ($value, false);
	return apply_filters( 'answer_four', $filtered, $value );
	/* @param string $filtered The sanitized string.
	*@param string $value      The string prior to being sanitized.
	*/
	// For testing purposes. Do not edit.
	return $value;
}

// What core WordPress santization method helps with sanitizing strings with HTML in it?

/**
 * Shafira's Answer_five
 *
 * @return string $value.
 */

function function_name( $class, $fallback = '' ) {
    $sanitized = preg_replace( '|%[a-fA-F0-9][a-fA-F0-9]|', '', $class );
 
    // Limit to A-Z, a-z, 0-9, '_', '-'.
    $sanitized = preg_replace( '/[^A-Za-z0-9_-]/', '', $sanitized );
 
    if ( '' === $sanitized && $fallback ) {
        return function_name( $fallback );
    }
    /**
     * @param string $sanitized The sanitized HTML class.
     * @param string $class     HTML class before sanitization.
     * @param string $fallback  The fallback string.
     */
    return apply_filters( 'answer_five', $sanitized, $class, $fallback );

	// For testing purposes. Do not edit.
	return $function_name;
}
