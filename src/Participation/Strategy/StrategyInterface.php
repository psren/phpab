<?php

namespace PhpAb\Participation\Strategy;

use PhpAb\AbRunner;

/**
 * The StrategyInterface that should be implemented by all classes that decide if the visitor is participating.
 */
interface StrategyInterface
{
    /**
     * Decides if the visitor is participating in the test.
     *
     * @param AbRunner $runner The instance of the test runner.
     * @return bool Returns true when the visitor is participating; false otherwise.
     */
    public function isParticipating(AbRunner $runner);
}
