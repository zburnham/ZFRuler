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
    protected $object;
    
    protected $sm;

    public function setUp()
    {
        parent::setUp();
        
        $this->setObject(new ComparisonOperatorFactory);
        $this->setSm(Bootstrap::getServiceManager());
    }
    
    public function testSanity()
    {
        $this->assertTrue(TRUE);
    }
    
    public function testReturnsComparisonOperator()
    {
        $this->assertInstanceOf('\Ruler\ComparisonOperator', $this->getObject->create(1,0));
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
    
    public function getSm()
    {
        return $this->sm;
    }

    public function setSm(ServiceManager $sm)
    {
        $this->sm = $sm;
        return $this;
    }
}
