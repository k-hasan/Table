<?php

namespace KhayrulHasan\Table;

class View
{
    //definition
    private $id;
    private $name;
    private $email;

    /*
     * Constructor
     */
    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    /*
     * get ID
     */
    public function getId()
    {
        return $this->id;
    }

    /*
     * get Name
     */
    public function getName()
    {
        return $this->name;
    }

    /*
     * get Email
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function test()
    {
        return "hello";
    }
}