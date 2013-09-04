<?php
/**
 * ComparisonOperatorFactoryTest.php
 * Tests for \ZFRuler\ComparisonOperatorFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

//TODO finish this after VariableFactory and tests written

namespace ZFRulerTest;

use Zend\ServiceManager\ServiceManager;
use ZFRuler\Factory\ComparisonOperatorFactory;

class ComparisonOperatorFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \ZFRuler\Factory\ComparisonOperatorFactory
     */
    protected $object;
    
    protected $sm;

    public function setUp()
    {
        parent::setUp();
        
        $this->setObject(new ComparisonOperatorFactory);
        $this->setSm(Bootstrap::getServiceManager());
    }
    
    /**
     * @group factories
     */
    public function testSanity()
    {
        $this->assertTrue(TRUE);
    }
    
    /**
     * @group factories
     */
    public function testReturnsComparisonOperator()
    {
        $vf = $this->getSm()->get('Ruler\VariableFactory');
        $left = $vf->create('Foo', 0);
        $right = $vf->create('Bar', 1);
        $this->assertInstanceOf('\Ruler\Operator\ComparisonOperator', $this->getObject()->create('Contains', $left, $right)); // shouldn't matter what operator we get
    }
    
    /**
     * @return \Ruler\ComparisonOperatorFactory
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \Ruler\ComparisonOperatorFactory $object
     * @return \ZFRulerTest\ComparisonOperatorFactoryTest
     */
    public function setObject($object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return \Zend\ServiceManager\ServiceManager
     */
    public function getSm()
    {
        return $this->sm;
    }

    /**
     * @param \Zend\ServiceManager\ServiceManager $sm
     * @return \ZFRulerTest\ComparisonOperatorFactoryTest
     */
    public function setSm(ServiceManager $sm)
    {
        $this->sm = $sm;
        return $this;
    }
}
