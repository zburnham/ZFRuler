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
    /**
     * Get a Context object (aka Pimple in disguise.)
     * 
     * @param array $array
     * @return \Ruler\Context
     */
    public function create(array $array = array())
    {
        return new Context($array);
    }
}