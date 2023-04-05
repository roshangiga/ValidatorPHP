<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:57 AM
 */

namespace validator;

/**
 *
 * Validates that the input is greater than or equal to a minimum value.
 */
class MinValue implements ValidationRule
{
    private $min;

    /**
     * Validates that the input is greater than or equal to a minimum value.
     * @param int $min The minimum allowed value.
     */
    public function __construct($min)
    {
        $this->min = $min;
    }

    /**
     * Validates that the input is greater than or equal to a minimum value.
     * @param int $input The input to validate.
     * @return bool True if the input is greater than or equal to the minimum value, false otherwise.
     */
    public function validate($input)
    {
        return ($input >= $this->min);
    }


    public function getErrorMessage($field)
    {
        return "$field must be greater than or equal to {$this->min}";
    }
}