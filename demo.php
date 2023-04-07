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

$rules = array(
    'name' => 'Required|Alphanumeric|MaxLength:60',
    'NID' => 'Required|NIC',
    'age' => 'Required|NumberBetween:18,60',
    'phone' => 'Mobile'
);

$inputs = array(
    'name' => '',
    'NID' => 'S120789436523H',
    'age' => '15',
    'phone' => '57929068'
);

$errors = (new Validator($rules, $inputs))->validate();

if (!empty($errors)) {
    // Handle validation errors
    // echo $validator->display_errors();
    print_r($errors);

} else {
    // Input is valid

}