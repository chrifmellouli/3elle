<?php


/**
 * Interface GiftOnProduct
 */
interface GiftOnProduct
{

    /**
     * @param int $id
     * @return GiftOnProduct|null
     */
    function findById(int $id):?GiftOnProduct;

    /**
     * @param int $product_number
     * @return iterable|null
     */
    function findByProductNumber(int $product_number):?iterable;

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
     * @param GiftOnProduct $giftOnProduct
     * @return int last insertedId
     */
    function save(GiftOnProduct $giftOnProduct):int;

    /**
     * @param GiftOnProduct $giftOnProduct
     */
    function update(GiftOnProduct $giftOnProduct):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
