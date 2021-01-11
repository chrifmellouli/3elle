<?php


/**
 * Interface FreeDeliveryProductDao
 */
interface FreeDeliveryProductDao
{

    /**
     * @param int $id
     * @return FreeDeliveryProduct|null
     */
    function findById(int $id): ?FreeDeliveryProduct;

    /**
     * @param int $prodcut_number
     * @return iterable|null
     */
    function findByProductNumber(int $prodcut_number): ?iterable;

    /**
     * @param int $id_free_delivery
     * @return iterable
     */
    function findByIdFreeDelivery(int $id_free_delivery): iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllFreeDelivery(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllFreeDeliveryOrder(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable
     */
    function findAllInfoFreeDeliveryOnProduct(int $id): iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param FreeDeliveryProduct $freeDeliveryProduct
     * @return int last inserted id
     */
    function save(FreeDeliveryProduct $freeDeliveryProduct): int;

    /**
     * @param FreeDeliveryProduct $freeDeliveryProduct
     */
    function update(FreeDeliveryProduct $freeDeliveryProduct): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}