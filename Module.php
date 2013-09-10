<?php

namespace ZFRuler;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;

use ZFRuler\Factory;


class Module implements AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
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
                'ruler-comparisonoperator-factory' => function () {
                    return new Factory\ComparisonOperatorFactory;
                },
                'ruler-context-factory' => function(){
                    return new Factory\ContextFactory;
                },
                'ruler-rulebuilder-factory' => function() {
                    return new Factory\RuleBuilderFactory;
                },
                'ruler-rule-factory' => function() {
                    return new Factory\RuleFactory;
                },
                'ruler-ruleset-factory' => function() {
                    return new Factory\RuleSetFactory;
                },
                'ruler-value-factory' => function() {
                    return new Factory\ValueFactory;
                },
                'ruler-variable-factory' => function() {
                    return new Factory\VariableFactory;
                },
                'ruler-variableproperty-factory' => function() {
                    return new Factory\VariablePropertyFactory;
                },
            ),
        );
    }
}