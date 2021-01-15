<?php


/**
 * Interface PromotionFrDao
 */
interface PromotionFrDao
{
    /**
     * @param int $id
     * @return PromotionFr|null
     */
    function findById(int $id):?PromotionFr;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param PromotionFr $promotionFr
     * @return int last inserted id
     */
    function save(PromotionFr $promotionFr):int;

    /**
     * @param PromotionFr $promotionFr
     */
    function update(PromotionFr $promotionFr):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}