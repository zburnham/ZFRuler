<?php
/**
 * VariablePropertyFactory
 * Factory for generating VariableProperties from the Ruler module
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRuler\Factory;

use Ruler\Variable;
use Ruler\VariableProperty;

class VariablePropertyFactory
{
    /**
     * 
     * @param \Ruler\Variable $parent
     * @param string $name
     * @param string $value
     * @return \Ruler\VariableProperty
     */
    public function create(Variable $parent, $name, $value = null)
    {
        return new VariableProperty($parent, $name, $value);
    }
}
