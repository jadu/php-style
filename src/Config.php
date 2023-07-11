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
            '@PHP80Migration' => true,
            '@PHP81Migration' => true,
            '@PHP82Migration' => true,

            // Use the Symfony style as a base
            '@Symfony' => true,

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

            // Don't use 'yoda style' comparisons (enabled by default as of php cs fixer 2.6.0)
            'yoda_style' => false,

            // Prefer self:: / static:: over $this-> for unit test assertions (defaults to static::)
            'php_unit_test_case_static_method_calls' => true,

            // Do not remove the params doc if there is no description
            'no_superfluous_phpdoc_tags' => false,

            'global_namespace_import' => false,

            'octal_notation' => false,

            // Can interfere with LOCALE constant
            'class_reference_name_casing' => false,

            // Disable heredoc indentation modification
            'heredoc_indentation' => false,

            // Allow if (true): endif; alternative syntax for control structures
            'no_alternative_syntax' => false,
        ]);

        // Need to allow risky for is_null
        $this->setRiskyAllowed(true);
    }
}
