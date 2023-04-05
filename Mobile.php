<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 4:51 PM
 */

namespace validator;

/**
 * Validates that a value is a valid Mauritian mobile phone number.
 *
 */
class Mobile implements ValidationRule {
    /**
     *  Either starts with the digit 5 followed by 7 digits, or starts with the country code +230 followed by 8 digits.
     *
     * @param mixed $input The input to validate.
     * @return bool True if the input is a valid mobile phone number, false otherwise.
     */
    public function validate($input) {
        return preg_match('/^[5]\d{7}$|^[+2305]\d{11}$/', $input);
    }


    public function getErrorMessage($field) {
        return "$field must be a valid mobile phone number";
    }
}