<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:41 AM
 */

namespace validator;

/**

Validates that the input has a maximum length.
 */
class MaxLength implements ValidationRule {
    private $max;
    /**

    Validates that the input has a maximum length.
    @param int $max The maximum allowed length.
     */
    public function __construct($max) {
        $this->max = $max;
    }
    /**

    Validates that the input has a maximum length.
    @param string $input The input to validate.
    @return bool True if the input has a length less than or equal to the maximum, false otherwise.
     */
    public function validate($input) {
        return (strlen($input) <= $this->max);
    }


    public function getErrorMessage($field) {
        return "$field must be no longer than {$this->max} characters";
    }
}