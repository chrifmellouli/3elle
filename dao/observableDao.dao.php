<?php


/**
 * Interface ObservableDao
 */
interface ObservableDao
{

    /**
     * @param int $id
     * @return Observable|null
     */
    function findBy(int $id): ?Observable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Observable $observable
     * @return int last inserted id
     */
    function save(Observable $observable): int;

    /**
     * @param Observable $observable
     */
    function update(Observable $observable): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}
