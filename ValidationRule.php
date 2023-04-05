<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/5/2023
 * Time: 11:41 AM
 */

namespace validator;

interface ValidationRule {
    public function validate($input);
    public function getErrorMessage($field);
}