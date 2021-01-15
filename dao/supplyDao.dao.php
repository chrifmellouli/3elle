<?php


/**
 * Interface SupplyDao
 */
interface SupplyDao
{
    /**
     * @param int $id
     * @return Supply|null
     */
    function findById(int $id): ?Supply;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Supply $supply
     * @return int last inserted id
     */
    function save(Supply $supply): int;

    /**
     * @param Supply $supply
     */
    function update(Supply $supply): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}