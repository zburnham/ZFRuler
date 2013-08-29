<?php
/**
 * ValueFactory.php
 * Factory to generate Value instances.
 * 
 * @author zburnham
 */

namespace ZFRuler\Factory;

use Ruler\Value;

class ValueFactory
{
    /**
     * Creates new Ruler Rule given a specific proposition.
     * 
     * @param mixed $value
     * @return \Ruler\Value
     */
    function create($value)
    {
        return new Value($value);
    }
}