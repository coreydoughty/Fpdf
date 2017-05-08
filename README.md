FPDF Symfony Bundle
===================

A Symfony bundle wrapper around the great php FPDF class. All credit to them.

[FPDF Website](http://www.fpdf.org/)

Currently uses FPDF 1.81. Tested in Symfony 3.x . Should work with Symfony 2.x .



### Requirements

![Symfony](http://pixel-cookers.github.io/built-with-badges/symfony/symfony-short-flat.png)



### Installation

Add to your "__composer.json__" file under the "__require__" section:

```
"cjd/fpdfbundle": "dev-master"
```

Then, enable the bundle by adding the following line in the app/AppKernel.php file of your project:

```php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new CJD\FpdfBundle\CJDFpdfBundle(),
        );

        // ...
    }

    // ...
}
```

Update composer

```sh
php composer.phar update
```


### Usage

In your php file that you want to use the class add a use statement.

```php
use CJD\FpdfBundle\Model\fpdf;
```

Then use as per the FPDF documantation.

``` php
$pdf = new fpdf();
```

Alternatively you can extend as a typical php class.

```php
class CustomPdf extends fpdf
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

You can also call fpdf as a Symfony service by using "__cjd.fpdf__". See Symfony [documetnation](http://symfony.com/doc/current/service_container.html) for service usages.


### License (MIT)

```text
Copyright (c) 2017 Corey Doughty

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

```
