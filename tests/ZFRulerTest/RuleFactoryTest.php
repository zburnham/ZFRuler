<?php
/**
 * RuleFactoryTest.php
 * Tests for RuleFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerTest;

use Ruler\Test\Fixtures\TrueProposition;
use ZFRuler\Factory\RuleFactory;

class RuleFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected $object;

    public function setUp()
    {
        parent::setUp();
        $this->setObject(new RuleFactory());
    }
    
    public function testRuleFactoryReturnsRule()
    {
        $p = new TrueProposition;
        $this->assertInstanceOf('\Ruler\Rule', $this->getObject()->create($p));
    }

    /**
     * @return RuleFactory
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \ZFRuler\Factory\RuleFactory $object
     * @return \ZFRulerTest\RuleFactoryTest
     */
    public function setObject(RuleFactory $object)
    {
        $this->object = $object;
        return $this;
    }
}