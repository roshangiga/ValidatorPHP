<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 12:04 PM
 */

namespace RoshanSummun\Phpvalidator;


use http\Params;

/**
 * Validates that the input is less than or equal to a maximum value.
 */
class MaxValue implements ValidationRule
{
    private $max;


    public function __construct($params = [])
    {
        $this->max = (int)$params[0];
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