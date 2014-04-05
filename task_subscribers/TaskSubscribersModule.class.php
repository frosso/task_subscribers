<?php

class TaskSubscribersModule extends AngieModule {
    /**
     * Active module
     *
     * @var string
     */
    protected $active_module = 'task_subscribers';

    /*
     * Nome del modulo, dev'essere uguale al nome della cartella
     */
    protected $name = 'task_subscribers';

    /*
     * Versione
     */
    protected $version = '0.1';

    public function getDisplayName() {
        return lang( 'Task Subscribers - FRosso' );
    }

    public function getDescription() {
        return lang( 'Shows the subscribers list in the task view' );
    }

    function defineHandlers() {
        EventsManager::listen( 'on_object_inspector', 'on_object_inspector' );
    }
}
