# ValidatorPHP
A simple form validator library for PHP

```php
// Example usage:
require 'autoloader.php';

use validator\Validator;
use validator\Required;
use validator\Alphanumeric;
// Others..

$fields = array(
    'name' => array(new Required(), new Alphanumeric(), new MaxLength(50)),
    'phone' => array(new Mobile())
);

$validator = new Validator($fields);

$input = array(
    'name' => $_POST['name'],
    'phone' => $_POST['phone'],
);

$errors = $validator->validate($input); // you could also pass $_POST directly

if (count($errors) > 0) {
    // Handle validation errors
    echo $validator->generateErrorMessage();
} else {
    // Input is valid
}
```
