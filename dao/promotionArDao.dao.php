<?php


/**
 * Interface PromotionArDao
 */
interface PromotionArDao
{
    /**
     * @param int $id
     * @return PromotionAr|null
     */
    function findById(int $id):?PromotionAr;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param PromotionAr $promotionAr
     * @return int last inserted id
     */
    function save(PromotionAr $promotionAr):int;

    /**
     * @param PromotionAr $promotionAr
     */
    function update(PromotionAr $promotionAr):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}