<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:42 AM
 */

namespace validator;

/**
 * Validates that the input is a numeric value.
 */
class Numeric implements ValidationRule
{
    /**
     * Validates that the input is a numeric value.
     *
     * @param string $input The input to validate.
     * @return bool True if the input is a numeric value, false otherwise.
     */
    public function validate($input)
    {
        return is_numeric($input);
    }

    public function getErrorMessage($field)
    {
        return "$field must be numeric";
    }
}