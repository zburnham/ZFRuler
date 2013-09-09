<?php
/**
 * RuleFactory.php
 * Factory to generate Rule instances.
 * 
 * @author zburnham
 */

namespace ZFRuler\Factory;

use Ruler\Rule;
use Ruler\Proposition;

class RuleFactory
{
    /**
     * Creates new \Ruler\Rule object given a specific proposition.
     * 
     * @param \Ruler\Proposition $p
     * @return \Ruler\Rule
     */
    function create(Proposition $p)
    {
        return new Rule($p);
    }
}