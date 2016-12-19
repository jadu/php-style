# Jadu PHP Style

Require the php-style dev dependency:

```
composer require --dev jadu/php-style
```

In your project's `.php_cs` config file use the `Config` class as follows:

```
<?php

require_once __DIR__ . '/vendor/jadu/php-style/src/Config.php';

use Jadu\Style\Config;
use PhpCsFixer\Finder;

$finder = Finder::create();
$finder->in(__DIR__ . '/jadu');
$finder->in(__DIR__ . '/tests/unit');

$config = new Config();
$config->setFinder($finder);

return $config;

```

Note: Remember to set up the finder appropriately for your project.
