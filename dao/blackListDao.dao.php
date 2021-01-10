<?php


/**
 * Interface BlackListDao
 */
interface BlackListDao
{

    /**
     * @param string $phone
     * @return BlackList last inserted id
     */
    function findById(string $phone): BlackList;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;


    /**
     * @param BlackList $blackList
     * @return int last inserted id
     */
    function save(BlackList $blackList): int;


    /**
     * @param BlackList $blackList
     */
    function update(BlackList $blackList): void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}
