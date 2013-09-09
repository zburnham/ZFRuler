<?php
/**
 * RuleSetFactoryTest.php
 * Test suite for the \ZFRuler\Factory\RuleSetFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerTest\Factory;

use Ruler\Rule;
use Ruler\RuleSet;
use Ruler\Test;

use ZFRuler\Factory\RuleFactory;
use ZFRuler\Factory\RuleSetFactory;

class RuleSetFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of RuleSetFactory for testing.
     *
     * @var \ZFRuler\Factory\RuleSetFactory
     */
    protected $object;
    
    public function setUp()
    {
        parent::setUp();
        $this->setObject(new RuleSetFactory);
    }

    /**
     * @group factories
     */
    public function testSanity()
    {
        $this->assertTrue(TRUE);
        $this->assertInstanceOf('\ZFRuler\Factory\RuleSetFactory', $this->getObject());
    }
    
    /**
     * Do we get a \Ruler\RuleSet factory back?
     */
    public function testDoWeGetARuleSetBack()
    {
        $rules = array($this->getFalseRule(), $this->getTrueRule());
        $this->assertInstanceOf('\Ruler\RuleSet', $this->getObject()->create($rules));
    }
    
    /**
     * Provides \Ruler\Rule fixture.
     * 
     * @return \Ruler\Rule
     */
    public function getFalseRule()
    {
        $fp = new Test\Fixtures\FalseProposition();
        $ruleFactory = new RuleFactory;
        return $ruleFactory->create($fp);
    }
    
    /**
     * Just for variety.  Also provides \Ruler\Rule.
     * 
     * @return \Ruler\Rule
     */
    public function getTrueRule()
    {
        $tp = new Test\Fixtures\TrueProposition();
        $ruleFactory = new RuleFactory;
        return $ruleFactory->create($tp);
    }
    
    /**
     * @return \ZFRuler\Factory\RuleSetFactory
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \ZFRuler\Factory\RuleSetFactory $object
     * @return \ZFRulerTest\Factory\RuleSetFactoryTest
     */
    public function setObject(\ZFRuler\Factory\RuleSetFactory $object)
    {
        $this->object = $object;
        return $this;
    }


}