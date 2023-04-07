<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/7/2023
 * Time: 4:34 PM
 */

// Example usage:
require_once 'vendor/autoload.php';

use RoshanSummun\Phpvalidator\Validator;

$fields = array(
    'name' => 'Required|Alphanumeric',
    'phone' => 'Mobile'
);
$validator = new Validator($fields);

$input = array(
    'name' => 'username123#',
    'phone' => '57929068'
);

$errors = $validator->validate($input);

if (count($errors) > 0) {
    // Handle validation errors
    // echo $validator->display_errors();
    print_r($errors);

} else {
    // Input is valid
    echo "Input is valid";
}