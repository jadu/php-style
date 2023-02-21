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
            '@PHP81Migration' => true,

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

            // Use === null instead of is_null()
            'is_null' => true,

            // Don't use 'yoda style' comparisons (enabled by default as of php cs fixer 2.6.0)
            'yoda_style' => false,

            // Prefer self:: / static:: over $this-> for unit test assertions (defaults to static::)
            'php_unit_test_case_static_method_calls' => true,

            // Do not remove the params doc if there is no description
            'no_superfluous_phpdoc_tags' => false,


            //-- Added for BC following upgrade to php-cs-fixer 3.x
            'global_namespace_import' => false,

            'visibility_required' => [
                'elements' => ['property', 'method'],
            ],

            'heredoc_indentation' => false,

            'no_unneeded_control_parentheses' => [
                'statements' => [
                    'break', 'clone', 'continue', 'echo_print', 'return', 'switch_case', 'yield'
                ],
            ],

            'phpdoc_order' => false,

            'single_line_comment_spacing' => false,

            'braces' => false,

            'phpdoc_separation' => false,
            //--//

        ]);

        // Need to allow risky for is_null
        $this->setRiskyAllowed(true);
    }
}
