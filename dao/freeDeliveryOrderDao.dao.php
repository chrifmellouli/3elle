<?php


/**
 * Interface FreeDeliveryOrderDao
 */
interface FreeDeliveryOrderDao
{

    /**
     * @param int $id
     * @return FreeDeliveryOrder|null
     */
    function findById(int $id): ?FreeDeliveryOrder;

    /**
     * @param float $order_amount
     * @return iterable|null
     */
    function findByOrderAmount(float $order_amount): ?iterable;

    /**
     * @param int $id_free_delivery
     * @return iterable|null
     */
    function findByIdFreeDelivery(int $id_free_delivery): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllFreeDeliveryOrder(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable
     */
    function findAllInfoFreeDeliveryOnOrder(int $id): iterable;

    /**
     * @return iterable|null
     */
    function findAllInfo(): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param FreeDeliveryOrder $freeDeliveryOrder
     * @return int last inserted id
     */
    function save(FreeDeliveryOrder $freeDeliveryOrder): int;

    /**
     * @param FreeDeliveryOrder $freeDeliveryOrder
     */
    function update(FreeDeliveryOrder $freeDeliveryOrder): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}