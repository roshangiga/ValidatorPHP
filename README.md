# ValidatorPHP
Validator library for PHP

```php
// Example usage:
require 'autoloader.php';

use validator\Validator;
use validator\Required;
use validator\Alphanumeric;
// Others..

$fields = array(
    'name' => array(new Required(), new Alphanumeric(), new MaxLength(50)),
    'phone' => array(new Numeric())
);

$validator = new Validator($fields);

$input = array(
    'name' => 'John Doe',
    'phone' => '1234567890'
);

$errors = $validator->validate($input);

if (count($errors) > 0) {
    // Handle validation errors
    echo $validator->generateErrorMessage();
} else {
    // Input is valid
}
```