<?php


/**
 * Interface ProductPromotedDao
 */
interface ProductPromotedDao
{
    /**
     * @param int $id
     * @return ProductPromoted|null
     */
    function findById(int $id):?ProductPromoted;

    /**
     * @param int $id_post
     * @return iterable|null
     */
    function findByIdPost(int $id_post):?iterable;

    /**
     * @param int $id_product
     * @return iterable|null
     */
    function findByIdProduct(int $id_product):?iterable;

    /**
     * @param int $id_promotion
     * @return iterable|null
     */
    function findByIdPromotion(int $id_promotion):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param ProductPromoted $productPromoted
     * @return int
     */
    function save(ProductPromoted $productPromoted):int;

    /**
     * @param ProductPromoted $productPromoted
     */
    function update(ProductPromoted $productPromoted):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}
