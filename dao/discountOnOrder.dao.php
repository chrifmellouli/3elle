<?php


/**
 * Interface DiscountOnOrder
 */
interface DiscountOnOrder
{

    /**
     * @param int $id
     * @return DiscountOnOrder|null
     */
    function findById(int $id):?DiscountOnOrder;

    /**
     * @param float $order_amount
     * @return iterable|null
     */
    function findByOrderAmount(float $order_amount):?iterable;

    /**
     * @param int $id_discount
     * @return iterable|null
     */
    function findByIdDiscount(int $id_discount):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllDiscount(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param DiscountOnOrder $discountOnOrder
     * @return int last inserted id
     */
    function save(DiscountOnOrder $discountOnOrder):int;

    /**
     * @param DiscountOnOrder $discountOnOrder
     */
    function update(DiscountOnOrder $discountOnOrder):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
