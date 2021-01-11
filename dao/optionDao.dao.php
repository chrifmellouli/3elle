<?php


interface OptionDao
{
    /**
     * @param int $id
     * @return Option|null
     */
    function findBy(int $id): ?Option;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Option $option
     * @return int last inserted id
     */
    function save(Option $option): int;

    /**
     * @param Option $option
     */
    function update(Option $option): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}