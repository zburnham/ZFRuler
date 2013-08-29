<?php
/**
 * ServicesTest.php
 * Unit tests for ZFRuler-provided services.
 *
 * @author Zachary Burnham zburnham@gmail.com
 */

namespace ZFRulerTest;

use Ruler\Test\Fixtures\TrueProposition;

use Zend\ServiceManager\ServiceManager;

class ServicesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * ServiceManager instance.
     *
     * @var ServiceManager
     */
    protected $sm;
    
    public function setUp()
    {
        parent::setUp();
        $this->sm = Bootstrap::getServiceManager();
    }
    /**
     * Sanity check.
     */
    public function testSanity()
    {
        $this->assertTrue(TRUE);
    }

    public function classes()
    {
        return array(
            array('Ruler\Context'),
            array('Ruler\RuleBuilder'),
            array('Ruler\RuleSet'),
            //array('Ruler\Value'),
            array('Ruler\Variable'),
            //array('Ruler\VariableProperty'),
        );
    }
    
    /**
     * @dataProvider classes
     */
    public function testSMGets($class)
    {
        $this->assertInstanceOf($class, $this->sm->get($class));
    }
    
    public function tearDown()
    {
        parent::tearDown();
    }
}