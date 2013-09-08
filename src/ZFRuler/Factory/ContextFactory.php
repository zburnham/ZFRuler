<?php
/**
 * ContextFactory.php
 * Factory for Ruler/Context objects.
 *
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRuler\Factory;

use Ruler\Context;

class ContextFactory
{
    public function create(array $array = array())
    {
        return new Context($array);
        
    }
}