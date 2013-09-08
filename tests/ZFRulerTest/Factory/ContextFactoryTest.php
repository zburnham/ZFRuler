<?php
/**
 * ContextFactoryTest
 * Test suite for ContextFactory class.
 * 
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerTest\Factory;

use Ruler\Context;

use ZFRuler\Factory\ContextFactory;

class ContextFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ContextFactory instance.
     *
     * @var ContextFactory
     */
    protected $object;
    
    public function setUp()
    {
        parent::setUp();
        $this->setObject(new ContextFactory);
    }
    
    /**
     * Do we get a Context object back?
     * 
     * @group factories
     */
    public function testWeGetAContextBack()
    {
        $f = $this->getObject();
        $this->assertInstanceOf('\Ruler\Context', $f->create());
    }
    
    /**
     * Can we set the parameters of the Context?
     * 
     * @group factories
     */ 
     public function testWeCanSetParametersInConstructor()
     {
         $array = array('a' => 'foo', 'b' => 'bar');
         $f = $this->getObject();
         $this->assertSame($f->create($array)->keys(), array('a', 'b'));
     }
    
    /**
     * @group factories
     */
    public function testSanity()
    {
        $this->assertTrue(TRUE);
    }

    /**
     * @return \ZFRuler\Factory\ContextFactory
     */
    public function getObject()
    {
        return $this->object;
    }
    /**
     * @param \ZFRuler\Factory\ContextFactory $object
     * @return \ZFRulerTest\Factory\ContextFactoryTest
     */
    public function setObject(ContextFactory $object)
    {
        $this->object = $object;
        return $this;
    }


}