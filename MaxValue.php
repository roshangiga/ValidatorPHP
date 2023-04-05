<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 12:04 PM
 */

namespace validator;


/**
 * Validates that the input is less than or equal to a maximum value.
 */
class MaxValue implements ValidationRule
{
    private $max;

    /**
     * Validates that the input is less than or equal to a maximum value.
     *
     * @param int $max The maximum allowed value.
     */
    public function __construct($max)
    {
        $this->max = $max;
    }

    /**
     * Validates that the input is less than or equal to a maximum value.
     *
     * @param int $input The input to validate.
     * @return bool True if the input is less than or equal to the maximum value, false otherwise.
     */
    public function validate($input)
    {
        return ($input <= $this->max);
    }


    public function getErrorMessage($field)
    {
        return "$field must be less than or equal to {$this->max}";
    }
}