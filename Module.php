<?php

namespace ZFRuler;

class Module 
{
    
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