<?php


/**
 * Interface OptionFrDao
 */
interface OptionFrDao
{

    /**
     * @param int $id
     * @return OptionFr|null
     */
    function findById(int $id): ?OptionFr;

    /**
     * @param string $designation
     * @return iterable|null
     */
    function findByDesignation(string $designation): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findByIdOption(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoOption(int $id): ?iterable;

    /**
     * @return iterable|null
     */
    function findAllInfo(): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param OptionFr $optionFr
     * @return int last inserted id
     */
    function save(OptionFr $optionFr): int;

    /**
     * @param OptionFr $optionFr
     */
    function update(OptionFr $optionFr): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}
