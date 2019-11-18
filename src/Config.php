<?php

namespace Jadu\Style;

use PhpCsFixer\Config as BaseConfig;

class Config extends BaseConfig
{
    /**
     * @param string $name
     */
    public function __construct($name = 'Jadu')
    {
        parent::__construct($name);
        $this->initialise();
    }

    private function initialise()
    {
        $this->setRules([
            '@PHP70Migration' => true,
            '@PHP71Migration' => true,

            // Use the Symfony style as a base
            '@Symfony' => true,

            // Unfortunately cannot use this fixer as a lot of Jadu code is within `/jadu` but
            //  namespaced in the `Jadu` root namespace. Since the case does not match it will
            //  change it to lower case, which is incorrect.
            'psr0' => false,

            // Use short array syntax
            'array_syntax' => ['syntax' => 'short'],

            // Concat with spaces
            'concat_space' => ['spacing' => 'one'],

            // Order use statements alphabetically
            'ordered_imports' => true,

            // Do not vertically align params
            'phpdoc_align' => ['align' => 'left'],

            // Prefer 'print' over 'echo'
            'no_mixed_echo_print' => ['use' => 'print'],

            // Use === null instead of is_null()
            'is_null' => ['use_yoda_style' => false],

            // Don't use 'yoda style' comparisons (enabled by default as of php cs fixer 2.6.0)
            'yoda_style' => false,

            // Prefer self:: / static:: over $this-> for unit test assertions (defaults to static::)
            'php_unit_test_case_static_method_calls' => true,

            // Do not remove the params doc if there is no description
            'no_superfluous_phpdoc_tags' => false,
        ]);

        // Need to allow risky for is_null
        $this->setRiskyAllowed(true);
    }
}
