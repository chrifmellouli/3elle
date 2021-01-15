<?php


/**
 * Interface PromotedGiftDao
 */
interface PromotedGiftDao
{
    /**
     * @param int $id
     * @return PromotedGift|null
     */
    function findById(int $id):?PromotedGift;

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
     * @param PromotedGift $promotedGift
     * @return int
     */
    function save(PromotedGift $promotedGift):int;

    /**
     * @param PromotedGift $promotedGift
     */
    function update(PromotedGift $promotedGift):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}