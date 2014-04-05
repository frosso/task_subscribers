<?php

define( 'TASK_SUBSCRIBERS_MODULE', 'task_subscribers' );
define( 'TASK_SUBSCRIBERS_MODULE_PATH', CUSTOM_PATH . '/modules/' . TASK_SUBSCRIBERS_MODULE );

AngieApplication::setForAutoload( array(
    'TaskSubscribedInspectorProperty' => TASK_SUBSCRIBERS_MODULE_PATH . '/inspectors/TaskSubscribedInspectorProperty.class.php',
) );