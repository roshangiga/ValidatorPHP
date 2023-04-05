<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:43 AM
 */

namespace validator;

/**
 * Validates that the input contains only alphanumeric characters and spaces.
 */
class Alphanumeric implements ValidationRule
{
    /**
     * Validates that the input contains only alphanumeric characters and spaces.
     *
     * @param string $input The input to validate.
     * @return bool True if the input contains only alphanumeric characters, false otherwise.
     */
    public function validate($input)
    {
        return preg_match('/^[a-zA-Z0-9 ]+$/', $input);
    }

    public function getErrorMessage($field)
    {
        return "$field must be alphanumeric";
    }
}