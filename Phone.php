<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:59 AM
 */

namespace validator;

/**
 * Validates that the input is a valid phone number.
 */
class Phone implements ValidationRule
{
    /**
     * Validates that the input is a valid phone number.
     * @param string $input The input to validate.
     * @return bool True if the input is a valid phone number, false otherwise.
     */
    public function validate($input)
    {
        return preg_match('/^[0-9+-\s]+$/', $input);
    }

    /**
     *
     * Returns the error message to display if the input is invalid.
     * @return string The error message.
     */
    public function getErrorMessage($field)
    {
        return "$field must be a valid phone number";
    }
}