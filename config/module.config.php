<?php

namespace IndiaAadhaarNumberValidator;

use Zend\ServiceManager\Factory\InvokableFactory;

return array(
    'validators' => array(
        'factories' => array(
            Validator\AadharNumber::class => InvokableFactory::class,
        ),
    ),

    /*
    'validators' => array(
        'invokables' => array(
            'AadharNumber' => 'Application\\Validator\\AadharNumber',
        ),
    ),
    */
    
    /*
    'service_manager' => array(
        //other service registration here...
        'abstract_factories' => array(
            'Zend\Form\FormAbstractServiceFactory',
        ),
        //other service registration here...
    ),
    */
);
