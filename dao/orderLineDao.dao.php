<?php


/**
 * Interface OrderLineDao
 */
interface OrderLineDao
{
    /**
     * @param int $id
     * @return OrderLine|null
     */
    function findById(int $id): ?OrderLine;

    /**
     * @param int $id_order
     * @return iterable|null
     */
    function findByIdOrder(int $id_order): ?iterable;

    /**
     * @param int $id_product
     * @return iterable|null
     */
    function findByIdProduct(int $id_product): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findByQuantity(int $id): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param OrderLine $orderLine
     * @return int last inserted id
     */
    function save(OrderLine $orderLine): int;

    /**
     * @param OrderLine $orderLine
     */
    function update(OrderLine $orderLine): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}
