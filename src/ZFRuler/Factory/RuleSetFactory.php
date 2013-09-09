<?php
/**
 * RuleSetFactory.php
 * Factory to generate Ruler\RuleSet objects.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRuler\Factory;

use Ruler\RuleSet;

class RuleSetFactory
{
    /**
     * Returns a \Ruler\RuleSet object.
     * 
     * @param array $rules
     * @return \Ruler\RuleSet
     */
    public function create(array $rules = array())
    {
        return new RuleSet($rules);
    }
}