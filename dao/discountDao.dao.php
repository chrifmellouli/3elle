<?php


/**
 * Interface DiscountDao
 */
interface DiscountDao
{

    /**
     * @param int $id
     * @return Discount|null
     */
    function findById(int $id):?Discount;

    /**
     * @param int $value
     * @return iterable|null
     */
    function findByValue(int $value):?iterable;

    /**
     * @param int $id_promoted_act
     * @return iterable|null
     */
    function findByIdPromotedAct(int $id_promoted_act):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllPromotedAct(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Discount $discount
     * @return int last inserted id
     */
    function save(Discount $discount):int;

    /**
     * @param Discount $discount
     */
    function update(Discount $discount):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
