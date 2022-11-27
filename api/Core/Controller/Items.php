<?php

namespace Core\Controller;

use Core\Database\DB;

/**
 * Manage the todo list items
 */
class Items
{
    protected $db;
    protected $http_code = 200;

    protected $response_schema = array(
        "success" => true, // to privde the response status
        "message_code" => "",
        "body" => array()
    );


    public function __construct()
    {
        $this->db = new DB();
    }

    public function render()
    {
        header("Content-Type: application/json");
        http_response_code($this->http_code);
        echo json_encode($this->response_schema);
    }

    public function index(): void
    {
        $items = array();
        $result = $this->db->submit_query("SELECT * FROM items");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
                $items[] = $row;
            }
        }

        $this->response_schema['body'] = $items;
        $this->response_schema['message_code'] = "items_collected";
    }

    public function single()
    {
    }

    /**
     * Create new list item
     *
     * @return void
     */
    public function create()
    {
    }

    /**
     * Update List item
     *
     * @return void
     */
    public function update()
    {
    }

    /**
     * delete list item
     *
     * @return void
     */
    public function delete()
    {
    }
}
