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

## Example Usage
```php
// Example usage:
require_once 'vendor/autoload.php';

use RoshanSummun\Phpvalidator\Validator;

$fields = array(
    'name' => 'Required|Alphanumeric',
    'phone' => 'Mobile'
);
$validator = new Validator($fields);

$input = array(
    'name' => 'username123#',
    'phone' => '57929068'
);

$errors = $validator->validate($input);

if (count($errors) > 0) {
    // Handle validation errors
    // echo $validator->display_errors();
    print_r($errors);

} else {
    // Input is valid
    echo "Input is valid";
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

Create your own validator classes by implementing the following methods:

- validate($value)
- getErrorMessage($field)

See the source code for examples of custom validators.


## Contributing

Contributions are welcome! If you find a bug or have a feature request, please create an issue or submit a pull request.

## License

This project is licensed under the [MIT License](https://opensource.org/licenses/MIT). See the [LICENSE](LICENSE) file for details.