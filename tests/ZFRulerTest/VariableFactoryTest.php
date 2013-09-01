<?php
/**
 * VariableFactoryTest.php
 * Test suite for \ZFRuler\Factory\VariableFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerTest;

use Ruler\Variable;

use Zend\ServiceManager\ServiceManager;

use ZFRuler\Factory\VariableFactory;

class VariableFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var VariableFactory
     */
    protected $object;
    
    /**
     * ServiceManager instance.
     *
     * @var ServiceManager
     */
    protected $sm;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->setSm(Bootstrap::getServiceManager());
        $this->setObject($this->getSm()->get('ZFRuler\VariableFactory')); // TODO
    }
    
    /**
     * @return VariableFactory
     */
    public function getObject()
    {
        return $this->object;
    }
    
    public function testSanity()
    {
        $this->assertTrue(TRUE);
    }

    /**
     * Do we get a Variable back from the factory?
     * 
     * @return bool
     */
    public function testReturnsVariable()
    {
        $this->assertInstanceOf('\Ruler\Variable', $this->getObject()->create());
    }
    
    /**
     * Can we set the name of the variable?
     * 
     * @return bool
     */
    public function testSetName()
    {
        $name = 'TestVariable';
        $v = $this->getObject()->create($name);
        $this->assertSame($name, $v->getName());
    }
    
    public function testSetValue()
    {
        $value = 0;
        $v = $this->getObject()->create(NULL, $value);
        $this->assertSame($value, $v->getValue());
    }
    
    /**
     * @param \ZFRuler\Factory\VariableFactory $object
     * @return \ZFRulerTest\VariableFactoryTest
     */
    public function setObject(VariableFactory $object)
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

