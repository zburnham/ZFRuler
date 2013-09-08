<?php
/**
 * VariablePropertyFactoryTest.php
 * Test suite for VariablePropertyFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.co
 */

namespace ZFRulerTest\Factory;

use Ruler\Variable;
use Ruler\VariableProperty;

use Zend\ServiceManager\ServiceManager;

use ZFRuler\Factory\VariableFactory;
use ZFRuler\Factory\VariablePropertyFactory;

use ZFRulerTest\Bootstrap;

class VariablePropertyFactoryTest extends \PHPUnit_Framework_TestCase
{
    protected $object;
    protected $sm;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->setSm(Bootstrap::getServiceManager());
        $this->setObject(new VariablePropertyFactory);
    }
    
    /**
     * Do we get a VariableProperty back?
     * 
     * @group factories
     */
    public function testReturnsVariableProperty()
    {
        $vf = new VariablePropertyFactory();
        $varf = new VariableFactory;
        $var = $varf->create('foo', 0);
        $this->assertInstanceOf('\Ruler\VariableProperty', 
                $vf->create($var, 'bar', 0));
    }

    /**
     * @return \ZFRuler\Factory\ComparisonOperatorFactory
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param \ZFRuler\Factory\VariablePropertyFactory
     * @return \ZFRulerTest\Factory\VariablePropertyFactory
     */
    public function setObject(VariablePropertyFactory $object)
    {
        $this->object = $object;
        return $this;
    }

    /**
     * @return ServiceManager
     */
    public function getSm()
    {
        return $this->sm;
    }

    /**
     * @param \Zend\ServiceManager\ServiceManager $sm
     * @return \ZFRulerTest\Factory\VariablePropertyFactoryTest
     */
    public function setSm(ServiceManager $sm)
    {
        $this->sm = $sm;
        return $this;
    }


}