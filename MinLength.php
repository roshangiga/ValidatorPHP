<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:59 AM
 */

namespace validator;

/**
 * Validates that the input has a minimum length.
 */
class MinLength implements ValidationRule
{
    private $min;

    /**
     * Validates that the input has a minimum length.
     * @param int $min The minimum allowed length.
     */
    public function __construct($min)
    {
        $this->min = $min;
    }

    /**
     * Validates that the input has a minimum length.
     * @param string $input The input to validate.
     * @return bool True if the input has a length greater than or equal to the minimum, false otherwise.
     */
    public function validate($input)
    {
        return (strlen($input) >= $this->min);
    }


    public function getErrorMessage($field)
    {
        return "$field must be at least {$this->min} characters long";
    }
}