# Jadu PHP Style

In your project's `.php_cs` config file use the `Config` class as follows:

```
<?php

use Jadu\Style\Config;
use Symfony\CS\Finder;

$finder = Finder::create();
$finder->in(__DIR__ . '/src');
$finder->in(__DIR__ . '/tests');

$config = new Config();
$config->finder($finder);

return $config;
```

Note: Remember to set up the finder appropriately for your project.
