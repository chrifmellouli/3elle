<?php


/**
 * Interface OptionArDao
 */
interface OptionArDao
{

    /**
     * @param int $id
     * @return OptionAr|null
     */
    function findById(int $id): ?OptionAr;

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
     * @param OptionAr $optionAr
     * @return int last inserted id
     */
    function save(OptionAr $optionAr): int;

    /**
     * @param OptionAr $optionAr
     */
    function update(OptionAr $optionAr): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}
