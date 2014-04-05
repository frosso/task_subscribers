<?php

/**
 * Populate object inspector
 *
 * @param IInspectorImplementation $inspector
 * @param IInspector $object
 * @param IUser $user
 * @param string $interface
 */
function task_subscribers_handle_on_object_inspector( IInspectorImplementation $inspector, IInspector &$object, IUser &$user, $interface ) {
    if ( $object instanceof Task ) {
        $inspector->addProperty( 'subscribed_users', lang( 'Subscribed users' ), new TaskSubscribedInspectorProperty( $object ) );
    }
}