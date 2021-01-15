<?php


/**
 * Interface PromotionActDao
 */
interface PromotionActDao
{
    /**
     * @param int $id
     * @return PromotionAct|null
     */
    function findById(int $id): ?PromotionAct;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param PromotionAct $promotionAct
     * @return int last inserted id
     */
    function save(PromotionAct $promotionAct): int;

    /**
     * @param PromotionAct $promotionAct
     */
    function update(PromotionAct $promotionAct): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}