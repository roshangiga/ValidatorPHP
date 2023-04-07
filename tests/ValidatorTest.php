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
        $fields = ['username' => ''];
        $rules = ['username' => 'Required'];
        $validator = new Validator($rules);
        $errors = $validator->validate($fields);
        $this->assertNotEmpty($errors);
    }

    public function testAlphanumeric()
    {
        $fields = ['username' => 'user@name'];
        $rules = ['username' => 'Alphanumeric'];
        $validator = new Validator($rules);
        $errors = $validator->validate($fields);
        $this->assertNotEmpty($errors);

        $fields = ['username' => 'username123'];
        $errors = $validator->validate($fields);
        $this->assertEmpty($errors);
    }

    public function testNumeric()
    {
        $fields = ['age' => '12a'];
        $rules = ['age' => 'Numeric'];
        $validator = new Validator($rules);
        $errors = $validator->validate($fields);
        $this->assertNotEmpty($errors);

        $fields = ['age' => '12'];
        $errors = $validator->validate($fields);
        $this->assertEmpty($errors);
    }

    public function testText()
    {
        $fields = ['name' => 'John123'];
        $rules = ['name' => 'Text'];
        $validator = new Validator($rules);
        $errors = $validator->validate($fields);
        $this->assertNotEmpty($errors);

        $fields = ['name' => 'John Doe'];
        $errors = $validator->validate($fields);
        $this->assertEmpty($errors);
    }

    public function testMaxLength()
    {
        $fields = ['username' => 'abcdefghijklmnopqrstuvwxyabcdefghijklmnopqrstuvwxy'];
        $rules = ['username' => 'MaxLength:20'];
        $validator = new Validator($rules);
        $errors = $validator->validate($fields);
        $this->assertNotEmpty($errors);

        $fields = ['username' => 'abcdefghijklmnopqrst'];
        $errors = $validator->validate($fields);
        $this->assertEmpty($errors);
    }

    public function testBetween()
    {
        $fields = ['age' => 200];
        $rules = ['age' => 'NumberBetween:1,120'];
        $validator = new Validator($rules);
        $errors = $validator->validate($fields);
        $this->assertNotEmpty($errors);

        $fields = ['age' => 25];
        $errors = $validator->validate($fields);
        $this->assertEmpty($errors);
    }
}