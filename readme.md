# GST Calculator

## Description

thetestcoder/gst-calculator is a PHP package that provides a GST (Goods and Services Tax) calculator. It allows you to calculate the GST amount based on a given rate and a provided value. The package is designed to be easily integrated into your PHP projects.

## Features

- Calculate GST amount based on rate and value.
- Handle exceptions for invalid values.

## Installation

You can install the package via Composer. Run the following command in your terminal:

```bash
composer require thetestcoder/gst-calculator
```

## Usage

### Initializing the Package

To use the package, you need to first initialize it and provide the GST rate:

```php
use Thetestcoder\GstCalculator;

require "./vendor/autoload.php";

$gst_calculator = new GstCalculator(18.0);
```

### Example Usage

Here's an example of how you can use the package to calculate the GST amount:

```php
try {
    $gstAmount = $gst_calculator->calculate(1000);
    echo "GST Amount: " . $gstAmount;
} catch (\Exception $e) {
    echo $e->getMessage();
}
```

In this example, the GST rate is set to 18.0%. The `calculate()` method is called with a value of 1000, and the calculated GST amount is displayed.

### Exception Handling

The package handles exceptions for invalid values. If the value passed to the `calculate()` method is negative, an exception will be thrown. You can catch the exception and handle it accordingly.

## Testing

The package comes with a set of unit tests to ensure its stability and functionality. You can run the tests using the following command:

```bash
vendor/bin/phpunit
```

## Contributing

Contributions are welcome! If you encounter any issues or have suggestions for improvements, please create an issue in the [issue tracker](https://github.com/thetestcoder/gst-calculator/issues/new). If you'd like to contribute code, please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature/bug fix.
3. Commit your changes and push them to your branch.
4. Submit a pull request.

Please ensure that your code adheres to the existing coding style and is well-documented.

## License

This package is open-source and available under the [MIT License](https://opensource.org/licenses/MIT).