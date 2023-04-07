<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:42 AM
 */

namespace RoshanSummun\Phpvalidator;

/**
 * Validates that the input is a numeric value.
 */
class Numeric implements ValidationRule
{

    public function validate($value)
    {
        return is_numeric($value);
    }

    public function getErrorMessage($field)
    {
        return "$field must be numeric";
    }
}