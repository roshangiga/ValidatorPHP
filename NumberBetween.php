<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:55 AM
 */

namespace validator;

/**
 * Validates that the input is a number between a minimum and maximum value.
 */
class NumberBetween implements ValidationRule
{
    private $min;
    private $max;

    /**
     * Validates that the input is a number between a minimum and maximum value.
     *
     * @param int $min The minimum allowed value.
     * @param int $max The maximum allowed value.
     */
    public function __construct($min, $max)
    {
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * Validates that the input is a number between a minimum and maximum value.
     *
     * @param int $input The input to validate.
     * @return bool True if the input is a number between the minimum and maximum values, false otherwise.
     */
    public function validate($input)
    {
        return ($input >= $this->min && $input <= $this->max);
    }

    /**
     * Returns the error message to display if the input is invalid.
     *
     * @return string The error message.
     */
    public function getErrorMessage($field)
    {
        return "$field must be between {$this->min} and {$this->max}";
    }
}