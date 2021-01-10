<?php


/**
 * Interface DiscountOnProduct
 */
interface DiscountOnProduct
{

    /**
     * @param int $id
     * @return DiscountOnProduct|null
     */
    function findByid(int $id):?DiscountOnProduct;

    /**
     * @param int $product_number
     * @return iterable|null
     */
    function findByProductNumber(int $product_number):?iterable;

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
     * @param DiscountOnProduct $discountOnProduct
     * @return int last inserted id
     */
    function save(DiscountOnProduct $discountOnProduct):int;

    /**
     * @param DiscountOnProduct $discountOnProduct
     */
    function update(DiscountOnProduct $discountOnProduct):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
