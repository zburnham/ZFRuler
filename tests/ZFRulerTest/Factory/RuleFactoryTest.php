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

use ZFRulerTest\Bootstrap;

class RuleFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \ZFRuler\Factory\RuleFactory;
     */
    protected $object;

    /**
     * Test set-up.
     */
    public function setUp()
    {
        parent::setUp();
        $this->setObject(new RuleFactory());
    }
    /**
     * @group factories
     */
    public function testRuleFactoryReturnsRule()
    {
        $p = new TrueProposition;
        $this->assertInstanceOf('\Ruler\Rule', $this->getObject()->create($p));
    }

    /**
     * @return \ZFRuler\Factory\RuleFactory
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