<?php


/**
 * Interface DeliveryDao
 */
interface DeliveryDao
{
    /**
     * @param int $id
     * @return Delivery|null
     */
    function findById(int $id):?Delivery;

    /**
     * @param float $price
     * @return iterable|null
     */
    function findByPrice(float $price):?iterable;

    /**
     * @param float $price
     * @return iterable|null
     */
    function findAllOrderByPrice(float $price):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Delivery $delivery
     * @return int last inserted id
     */
    function save(Delivery $delivery):int;

    /**
     * @param Delivery $delivery
     */
    function update(Delivery $delivery):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}