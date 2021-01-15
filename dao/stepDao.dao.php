<?php


/**
 * Interface StepDao
 */
interface StepDao
{
    /**
     * @param int $id
     * @return Step|null
     */
    function findById(int $id):?Step;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Step $step
     * @return int last inserted id
     */
    function save(Step $step):int;

    /**
     * @param Step $step
     */
    function update(Step $step):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}