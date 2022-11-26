<?php

namespace Core\Controller;

/**
 * Manage the todo list items
 */
class Items
{
    public function __construct()
    {
        echo "Hi from construct <br>";
    }

    public function index()
    {
        echo "hi from index";
    }

    /**
     * Create new list item
     *
     * @return void
     */
    public function create()
    {
        echo "hi from create";
    }

    /**
     * Update List item
     *
     * @return void
     */
    public function update()
    {
        echo "hi from update";
    }

    /**
     * delete list item
     *
     * @return void
     */
    public function delete()
    {
        echo "hi from delete";
    }
}
