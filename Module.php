<?php

namespace ZFRuler;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

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
                'Ruler\Context' => function($sm) {
                    return new Ruler\Context;
                },
                'Ruler\Rule' => function($sm) {
                    return new Ruler\Rule;
                },
                'Ruler\RuleBuilder' => function($sm) {
                    return new Ruler\RuleBuilder;
                },
                'Ruler\RuleSet' => function($sm) {
                    return new Ruler\RuleSet;
                },
                'Ruler\Value' => function($sm) {
                    return new Ruler\Value;
                },
                'Ruler\Variable' => function($sm) {
                    return new Ruler\Variable;
                },
                'Ruler\VariableProperty' => function($sm) {
                    return new Ruler\VariableProperty;
                }
            ),
        );
    }
}