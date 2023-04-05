<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 12:39 PM
 */

namespace validator;

/**
 * Validates that a value is present.
 */
class Required implements ValidationRule {
    /**
     * Validates that a value is present.
     *
     * @param mixed $input The input to validate.
     * @return bool True if the input is present, false otherwise.
     */
    public function validate($input) {
        return !empty($input);
    }


    public function getErrorMessage($field) {
        return "$field is required";
    }
}