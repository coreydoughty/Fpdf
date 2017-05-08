FPDF Symfony Bundle
===================

A symfony bundle wrapper around the great php FPDF class. All credit to them.

[FPDF Website](http://www.fpdf.org/)

Currently uses FPDF 1.81. Tested in Symfony 3.



### Requirements

![PHP](http://pixel-cookers.github.io/built-with-badges/php/php-short-flat.png)
![Symfony](http://pixel-cookers.github.io/built-with-badges/symfony/symfony-short-flat.png)



### Installation

Add to your "__composer.json__" file (section may already exist):

```json
  "repositories": [
    {
      "name": "cjd/fpdfbundle",
      "type": "vcs",
      "url": "https://github.com/coreydoughty/FpdfBundle"
    }
  ],
```

```json
  "require": {
    "cjd/fpdfbundle": "dev-master"
  },
```

In the file "__app/AppKernel.php__" add to the "__AppKernel__" class, "__registerBundles__" function, "__bundles__" array, a line similar to:

```php
new CJD\FpdfBundle\CJDFpdfBundle(),
```



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
