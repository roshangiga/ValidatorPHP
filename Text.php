<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:43 AM
 */

namespace validator;

/**
 * Validates that a value contains only alphanumeric characters, spaces, and symbols.
 */
class text implements ValidationRule
{
    /**
     * Validates that a value contains only alphanumeric characters, spaces, and symbols.
     *
     * @param string $input The input to validate.
     * @return bool True if the input contains only alphanumeric characters, false otherwise.
     */
    public function validate($input)
    {
        return preg_match('/^[a-zA-Z0-9 !@#$%^&*()_+\-=[\]{};\'\\:"|,.<>\/?`~]+$/', $input);
    }

    public function getErrorMessage($field)
    {
        return "$field must contains only alphanumeric characters, spaces, and symbols";
    }
}