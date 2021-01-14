<?php


/**
 * Interface OrderDao
 */
interface OrderDao
{
    /**
     * @param int $id
     * @return Order|null
     */
    function findById(int $id): ?Order;

    /**
     * @param string $code
     * @return iterable|null
     */
    function findByCode(string $code): ?iterable;

    /**
     * @param DateTime $dateTime
     * @return iterable|null
     */
    function findBydate(DateTime $dateTime): ?iterable;

    /**
     * @param int $id_delivery
     * @return iterable|null
     */
    function findByIdDelivery(int $id_delivery): ?iterable;

    /**
     * @param int $id_customer
     * @return iterable|null
     */
    function findByIdCustomer(int $id_customer): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllProdut(int $id): ?iterable;

    /**
     * @return iterable|null
     */
    function findAllOrderLine(): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Order $order
     * @return int last inserted id
     */
    function save(Order $order): int;

    /**
     * @param Order $order
     */
    function update(Order $order): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}