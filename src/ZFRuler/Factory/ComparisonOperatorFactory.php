<?php
/**
 * ComparisonOperatorFactory.php
 * Factory to generate Comparison operators from the Ruler module.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRuler\Factory;

use Ruler\Operator\ComparisonOperator;
use Ruler\Variable;

class ComparisonOperatorFactory
{
    /**
     * @param string $operator
     * @param \Ruler\Variable $left
     * @param \Ruler\Variable $right
     * @return \Ruler\Operator\ComparisonOperator
     */
    public function create($operator, Variable $left, Variable $right) 
    {
        $classname = "\\Ruler\\Operator\\" . $operator;
        return new $classname($left, $right);
    }
}