<?php
/**
 * VariableFactoryTest.php
 * Test suite for \ZFRuler\Factory\VariableFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerTest\Factory;

use Ruler\Variable;

use Zend\ServiceManager\ServiceManager;

use ZFRuler\Factory\VariableFactory;

use ZFRulerTest\Bootstrap;

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
        $this->setObject($this->getSm()->get('Ruler\VariableFactory')); // TODO
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
     * @group factories
     */
    public function testReturnsVariable()
    {
        $this->assertInstanceOf('\Ruler\Variable', $this->getObject()->create('test',0));
    }
    
    /**
     * @group factories
     */
    public function testCreateSetsArgumentsProperly()
    {
        $name = 'Foo';
        $value = 1;
        $v = $this->getObject()->create($name, $value);
        
        $this->assertSame($name, $v->getName());
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

