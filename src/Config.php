<?php

namespace Jadu\Style;

use Symfony\CS\Config as BaseConfig;
use Symfony\CS\FixerInterface;

class Config extends BaseConfig
{
    /**
     * @param string $name
     * @param string $description
     */
    public function __construct($name = 'Jadu', $description = 'The Jadu PHP Style')
    {
        parent::__construct($name, $description);

        $this->initialise();
    }

    private function initialise()
    {
        // Use the Symfony styleguide as a base
        $this->level(FixerInterface::SYMFONY_LEVEL);

        $this->fixers([
            // Unfortunately cannot use this fixer as a lot of Jadu code is within `/jadu` but
            //  namespaced in the `Jadu` root namespace. Since the case does not match it will
            //  change it to lower case, which is incorrect.
            '-psr0',

            // Order use statements alphabetically
            'ordered_use',

            // Remove useless else
            'no_useless_else',

            // Remove useless return statements
            'no_useless_return',
        ]);
    }
}
