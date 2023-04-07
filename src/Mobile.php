<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 4:51 PM
 */

namespace RoshanSummun\Phpvalidator;

/**
 * Validates that a value is a valid Mauritian mobile phone number.
 * E.g 57929068 OR +23057929068
 *
 */
class Mobile implements ValidationRule {

    public function __construct($params = [])
    {
    }


    public function validate($value) {
        return preg_match('/^5\d{7}$|^[+2305]\d{11}$/', $value);
    }


    public function getErrorMessage($field) {
        return "$field must be a valid mobile phone number";
    }
}