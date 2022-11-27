<?php

namespace Core\Controller;


/**
 * Show the app
 */
class Front
{

    public function render()
    {
        // inculde the todo.php
        include dirname(__DIR__, 2) . "/resources/todo.php";
    }
}
