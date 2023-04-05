<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:54 AM
 */

namespace validator;

/**
 * Validates that the input is a valid email address.
 */
class Email implements ValidationRule {
    /**
     * Validates that the input is a valid email address.
     *
     * @param string $input The input to validate.
     * @return bool True if the input is a valid email address, false otherwise.
     */
    public function validate($input) {
        return filter_var($input, FILTER_VALIDATE_EMAIL);
    }


    public function getErrorMessage($field) {
        return "$field must be a valid email address";
    }
}