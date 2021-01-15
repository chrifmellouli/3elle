<?php


/**
 * Interface PromotionDao
 */
interface PromotionDao
{
    /**
     * @param int $id
     * @return Promotion|null
     */
    function findById(int $id): ?Promotion;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Promotion $promotion
     * @return int last inserted id
     */
    function save(Promotion $promotion): int;

    /**
     * @param Promotion $promotion
     */
    function update(Promotion $promotion): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}