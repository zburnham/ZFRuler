<?php
/**
 * RuleBuilderFactoryTest.php
 * Test suite for the RuleBuilderFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerTest\Factory;

use Ruler\Test;

use ZFRuler\Factory\RuleBuilderFactory;

class RuleBuilderFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of class being tested.
     *
     * @var \ZFRuler\Factory\RuleBuilderFactory
     */
    protected $object;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->setObject(new RuleBuilderFactory);
    }
    
    /**
     * @group factories
     */
    public function testSanity()
    {
        $this->assertInstanceOf('\ZFRuler\Factory\RuleBuilderFactory', 
                $this->getObject());
    }

    /**
     * Do we get a RuleBuilder back?
     * 
     * @group factories
     */
    public function testDoWeGetARuleBuilderBack()
    {
        $tp = new Test\Fixtures\TrueProposition(); // I used TP because I'm 12 years old, huh huh
        $factory = $this->getObject();
        
        $this->assertInstanceOf('\Ruler\RuleBuilder', $factory->create($tp));
    }
    
    /**
     * Can we use the RuleBuilder to build a rule?
     * 
     * @group factories
     */
    public function testCanWeCreateRule()
    {
        $tp = new Test\Fixtures\TrueProposition();
        $rule = $this->getObject()->create($tp)->create($tp);
        $this->assertInstanceOf('\Ruler\Rule', $rule);
    }
    
    /**
     * @return \ZFRuler\Factory\RuleBuilderFactory
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \ZFRuler\Factory\RuleBuilderFactory $object
     * @return \ZFRulerTest\Factory\RuleBuilderFactoryTest
     */
    public function setObject(\ZFRuler\Factory\RuleBuilderFactory $object)
    {
        $this->object = $object;
        return $this;
    }


}