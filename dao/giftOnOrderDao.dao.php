<?php


/**
 * Interface GiftOnOrderDao
 */
interface GiftOnOrderDao
{

    /**
     * @param int $id
     * @return GiftOnOrder|null
     */
    function findById(int $id):?GiftOnOrder;

    /**
     * @param int $order_amount
     * @return iterable|null
     */
    function findByOrderAmount(int $order_amount):?iterable;

    /**
     * @param int $id_gift
     * @return iterable|null
     */
    function findByIdGiift(int $id_gift):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllGift(int $id):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoGiftOnProduct(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @return iterable|null
     */
    function findAllInfo():?iterable;


    /**
     * @param GiftOnOrder $giftOnOrder
     * @return int last inserted id
     */
    function save(GiftOnOrder $giftOnOrder):int;


    /**
     * @param GiftOnOrder $giftOnOrder
     */
    function update(GiftOnOrder $giftOnOrder):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
