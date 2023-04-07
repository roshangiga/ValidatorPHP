# ValidatorPHP
PHP Validator is a simple and flexible validation library for PHP. Easily validate form inputs or any other data using a set of built-in rules or create custom validators to fit your needs.

## Features

- Simple and easy-to-use syntax
- Built-in validation rules
- Customizable error messages
- Extendable with custom validation rules

## Installation
Use [Composer](https://getcomposer.org/) to install PHP Validator:

```bash
composer require roshansummun/phpvalidator
```
[LICENSE](..%2FValidatorPHP%2FLICENSE)
## Example Usage
```php
require_once 'vendor/autoload.php';

use RoshanSummun\Phpvalidator\Validator;

$rules = array(
    'name' => 'Required|Alphanumeric|MaxLength:60',
    'NID' => 'Required|NIC',
    'age' => 'Required|NumberBetween:18,60',
    'phone' => 'Mobile'
);

$inputs = array(
    'name' => '',
    'NID' => 'S120789436523H',
    'age' => '15',
    'phone' => '57929068'
);

$errors = (new Validator($rules, $inputs))->validate();

if (!empty($errors)) {
    // Handle validation errors
    // echo $validator->display_errors();
    print_r($errors);

} else {
    // Input is valid

}
```
## Built-in Validators

The following validators are included out of the box:

- Alphanumeric
- Required
- MinLength
- NIC
- Phone
- Email
- MinValue
- MaxLength
- URL
- Mobile
- Numeric
- Text
- MaxValue
- NumberBetween

## Custom Validators

The following validators are included out of the box:

- validate($value)
- getErrorMessage($field)

See the source code for examples of custom validators.


## Contributing

Contributions are welcome! If you find a bug or have a feature request, please create an issue or submit a pull request.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). See the [LICENSE](LICENSE) file for details.