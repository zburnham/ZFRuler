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

use ZFRulerTest\Bootstrap;

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
     * @group services
     */
    public function testSanity()
    {
        $this->assertTrue(TRUE);
    }
    
    public function services()
    {
        return array(
            array(
                'ruler-comparisonoperator-factory', 
                '\ZFRuler\Factory\ComparisonOperatorFactory',
                ),
            array(
                'ruler-context-factory',
                '\ZFRuler\Factory\ContextFactory',
                ),
            array(
                'ruler-rulebuilder-factory',
                '\ZFRuler\Factory\RuleBuilderFactory',
                ),
            array(
                'ruler-rule-factory',
                '\ZFRuler\Factory\RuleFactory',
                ),
            array(
                'ruler-ruleset-factory',
                '\ZFRuler\Factory\RuleSetFactory',
            ),
            array(
                'ruler-value-factory',
                '\ZFRuler\Factory\ValueFactory',
            ),
            array(
                'ruler-variable-factory',
                '\ZFRuler\Factory\VariableFactory',
            ),
            array(
                'ruler-variableproperty-factory',
                '\ZFRuler\Factory\VariablePropertyFactory',
            ),
        );
    }
    
    /**
     * @dataProvider services
     * @group services
     */
    public function testSMGets($key, $class)
    {
        $this->assertInstanceOf($class, $this->sm->get($key));
    }
    
    public function tearDown()
    {
        parent::tearDown();
    }
}