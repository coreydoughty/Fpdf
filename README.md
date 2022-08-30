FPDF Wrapper Class
===================

A composer wrapper around the great php FPDF class. All credit to them.

[FPDF Website](http://www.fpdf.org/)

Currently uses FPDF 1.84.



## Installation

Add to your "__composer.json__" file under the "__require__" section:

```
"fpdf/fpdf": "^1.84"
```


Update composer

```sh
php composer.phar update
```



## Usage

In your php file that you want to use the class add a use statement.

```php
use Fpdf\Fpdf;
```

Then use as per the FPDF documentation.

``` php
$pdf = new Fpdf();
```

Alternatively you can extend as a typical php class.

```php
class CustomPdf extends Fpdf
{
    public function __construct(
        $orientation = 'P',
        $unit = 'mm',
        $size = 'letter'
    ) {
        parent::__construct( $orientation, $unit, $size );
        // ...
    }
}

```



### License FPDF

```text
Permission is hereby granted, free of charge, to any person obtaining a copy
of this software to use, copy, modify, distribute, sublicense, and/or sell
copies of the software, and to permit persons to whom the software is furnished
to do so.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED.
```
