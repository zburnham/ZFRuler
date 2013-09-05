<?php
/**
 * VariableFactory.php
 * Factory to generate \Ruler\Variable instances.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRuler\Factory;

use Ruler\Variable;

class VariableFactory
{
    /**
     * @param string $name
     * @param mixed $value
     * 
     * @return Variable
     */
    public function create($name = null, $value = null)
    {
        return new Variable($name, $value);
    }
}
