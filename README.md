# Rector configurations for Contao

<p>
<a href="https://github.com/contao/rector/actions"><img src="https://github.com/contao/rector/actions/workflows/ci.yml/badge.svg?branch=main" alt></a>
<a href="https://packagist.org/packages/contao/rector"><img src="https://img.shields.io/packagist/v/contao/rector.svg" alt></a>
<a href="https://packagist.org/packages/contao/rector"><img src="https://img.shields.io/packagist/dt/contao/rector.svg" alt></a>
</p>

This package includes the [Rector][1] configuration for [Contao][2].

## Installation

You can install the package with Composer:

```
composer require contao/rector
```

## Usage

Create a file named `rector.php` in the root directory of your project.

```php
<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([__DIR__.'/vendor/contao/rector/config/contao.php']);

    // Adjust the configuration according to your needs.
};
```

Then run the script like this:

```
vendor/bin/rector
```

## License

Contao is licensed under the terms of the LGPLv3.

## Getting support

Visit the [support page][3] to learn about the available support options.

[1]: https://github.com/rectorphp/rector
[2]: https://contao.org
[3]: https://contao.org/en/support.html
