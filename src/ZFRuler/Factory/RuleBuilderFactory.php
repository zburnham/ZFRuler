<?php
/**
 * RuleBuilderFactory.php
 * Factory to provide RuleBuilder objects from the Ruler module.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRuler\Factory;

use Ruler\Proposition;
use Ruler\RuleBuilder;

class RuleBuilderFactory
{
    /**
     * 
     * @param \Ruler\Proposition $proposition
     * @param type $action
     * @return \Ruler\RuleBuilder
     */
    public function create()
    {
        return new RuleBuilder();
    }
}