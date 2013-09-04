<?php

namespace ZFRuler;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

use Ruler\Context;
use Ruler\Rule;
use Ruler\RuleBuilder;
use Ruler\RuleSet;
use Ruler\Value;
use Ruler\Variable;
use Ruler\VariableProperty;
use Ruler\Operator;
//use Ruler\Operator\ComparisonOperator;
//use Ruler\Operator\Contains;
//use Ruler\Operator\DoesNotContain;
//use Ruler\Operator\EqualTo;
//use Ruler\Operator\GreaterThan;
//use Ruler\Operator\LessThan;
//use Ruler\Operator\LessThanOrEqualTo;
//use Ruler\Operator\LogicalAnd;
//use Ruler\Operator\LogicalNot;
//use Ruler\Operator\LogicalOperator;
//use Ruler\Operator\LogicalOr;
//use Ruler\Operator\LogicalXor;
//use Ruler\Operator\NotEqualTo;


class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
//            'Zend\Loader\ClassMapAutoloader' => array(
//                __DIR__ . '/autoload_classmap.php',
//            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    
    public function onBootstrap($e)
    {
        // You may not need to do this if you're doing it elsewhere in your
        // application
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }
    
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Ruler\Context' => function() {
                    return new Context;
                },
                'Ruler\RuleFactory' => function() {
                    return new Factory\RuleFactory();
                },
                'Ruler\RuleBuilder' => function() {
                    return new RuleBuilder;
                },
                'Ruler\RuleSet' => function() {
                    return new RuleSet;
                },
                'Ruler\Value' => function() {
                    return new Value;
                },
                'Ruler\Variable' => function() {
                    return new Variable;
                },
                'Ruler\VariableProperty' => function() {
                    return new VariableProperty;
                },
                'Ruler\Contains' => function () {
                    return new Contains;
                },
                'Ruler\DoesNotContain' => function () {
                    return new DoesNotContain;
                },
                'Ruler\Operator\ComparisonOperatorFactory' => function () {
                    return new Factory\ComparisonOperatorFactory;
                },
                'Ruler\Operator\Contains' => function () {
                    return new Operator\Contains;
                },
                'Ruler\Operator\DoesNotContain' => function () {
                    return new Operator\DoesNotContain;
                },
                'Ruler\Operator\EqualTo' => function () {
                    return new Operator\EqualTo;
                },
                'Ruler\Operator\GreaterThan' => function () {
                    return new Operator\GreaterThan;
                },
                'Ruler\Operator\LessThan' => function () {
                    return new Operator\LessThan;
                },
                'Ruler\Operator\LessThanOrEqualTo' => function () {
                    return new Operator\LessThanOrEqualTo;
                },
                'Ruler\Operator\LogicalAnd' => function () {
                    return new Operator\LogicalAnd;
                },
                'Ruler\Operator\LogicalNot' => function () {
                    return new Operator\LogicalNot;
                },
                'Ruler\Operator\LogicalOperator' => function () {
                    //TODO we need a factory here
                },
                'Ruler\Operator\LogicalOr' => function() {
                    return new Operator\LogicalOr;
                },
                'Ruler\Operator\LogicalXor' => function () {
                    return new Operator\LogicalXor;
                },
                'Ruler\Operator\NotEqualTo' => function () {
                    return new Operator\NotEqualTo;
                }
            ),
        );
    }
}