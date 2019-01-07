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
$finder->in(__DIR__ . '/src');
$finder->in(__DIR__ . '/tests/unit');

$config = new Config();
$config->setFinder($finder);

return $config;

```

Now add phpcs to your project's build tasks.

Example CI command:
```
vendor/bin/php-cs-fixer --dry-run -v fix
```
