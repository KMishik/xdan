<?php

class App extends Singleton 
{
    function start() {

        Router::gi()->parse();
        $controller = App::gi(Router::gi()->controller.'Controller');
        $controller->__call('action'.Router::gi()->action);
    }
}