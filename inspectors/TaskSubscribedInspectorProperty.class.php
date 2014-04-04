<?php

class TaskSubscribedInspectorProperty extends InspectorProperty {

    /**
     * Function that will render the property
     *
     * @return string
     */
    function render() {
        Logger::log('lololol');
		return '(function (field, object, client_interface) { App.Inspector.Properties.TaskSubscribers.apply(field, [object, client_interface]) })';
	}
}
