<?php


/**
 * Interface OptionValueDao
 */
interface OptionValueDao
{

    /**
     * @param int $id
     * @return OptionValue|null
     */
    function findById(int $id): ?OptionValue;

    /**
     * @param int $id_product
     * @return iterable|null
     */
    function findByIdProduct(int $id_product): ?iterable;

    /**
     * @param int $id_option
     * @return iterable|null
     */
    function findByIdOption(int $id_option): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param OptionValue $optionValue
     * @return int last inserted id
     */
    function save(OptionValue $optionValue): int;

    /**
     * @param OptionValue $optionValue
     */
    function update(OptionValue $optionValue): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}