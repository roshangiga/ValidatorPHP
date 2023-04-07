<?php
/**
 * Created by PhpStorm.
 * User: roshan.summun
 * Date: 4/7/2023
 * Time: 3:35 PM
 */

use PHPUnit\Framework\TestCase;
use RoshanSummun\Phpvalidator\Validator;

class ValidatorTest extends TestCase
{
    public function testRequired()
    {
        $inputs = ['username' => ''];
        $rules = ['username' => 'Required'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertNotEmpty($errors);
    }

    public function testAlphanumeric()
    {
        $inputs = ['username' => 'user@name'];
        $rules = ['username' => 'Alphanumeric'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertNotEmpty($errors);

        $inputs = ['username' => 'username123'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertEmpty($errors);
    }

    public function testNumeric()
    {
        $inputs = ['age' => '12a'];
        $rules = ['age' => 'Numeric'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertNotEmpty($errors);

        $inputs = ['age' => '12'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertEmpty($errors);
    }

    public function testText()
    {
        $inputs = ['name' => 'John123'];
        $rules = ['name' => 'Text'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertNotEmpty($errors);

        $inputs = ['name' => 'John Doe'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertEmpty($errors);
    }

    public function testMaxLength()
    {
        $inputs = ['username' => 'abcdefghijklmnopqrstuvwxyabcdefghijklmnopqrstuvwxy'];
        $rules = ['username' => 'MaxLength:20'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertNotEmpty($errors);

        $inputs = ['username' => 'abcdefghijklmnopqrst'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertEmpty($errors);
    }

    public function testBetween()
    {
        $inputs = ['age' => 200];
        $rules = ['age' => 'NumberBetween:1,120'];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertNotEmpty($errors);

        $inputs = ['age' => 25];
        $errors = (new Validator($rules, $inputs))->validate();
        $this->assertEmpty($errors);
    }
}