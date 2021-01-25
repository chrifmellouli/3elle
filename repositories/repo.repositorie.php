<?php

require '../models/utilities.model.php';

class Repo
{
    /**
     * @var Utilities
     */
    protected Utilities $_action_server_side;

    public function __construct()
    {
        $this -> _action_server_side = new Utilities();
    }

    /**
     * @return Utilities
     */
    public function getActionServerSide(): Utilities
    {
        return $this -> _action_server_side;
    }

}
