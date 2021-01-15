<?php


/**
 * Interface SupplierDao
 */
interface SupplierDao
{
    /**
     * @param int $id
     * @return Supplier|null
     */
    function findById(int $id): ?Supplier;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Supplier $supplier
     * @return int last inserted id
     */
    function save(Supplier $supplier): int;

    /**
     * @param Supplier $supplier
     */
    function update(Supplier $supplier): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}