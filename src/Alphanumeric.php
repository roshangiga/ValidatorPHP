<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:43 AM
 */

namespace RoshanSummun\Phpvalidator;

/**
 * Validates that the input contains only alphanumeric characters and spaces.
 */
class Alphanumeric implements ValidationRule
{

    public function validate($value)
    {
        return isset($value) && ctype_alnum($value);
    }

    public function getErrorMessage($field)
    {
        return "$field must be alphanumeric";
    }
}