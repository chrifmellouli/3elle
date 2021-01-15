<?php


/**
 * Interface StateDao
 */
interface StateDao
{
    /**
     * @param int $id
     * @return State|null
     */
    function findById(int $id):?State;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param State $state
     * @return int last inserted id
     */
    function save(State $state):int;

    /**
     * @param State $state
     */
    function update(State $state):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}