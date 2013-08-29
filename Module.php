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
                }
            ),
        );
    }
}