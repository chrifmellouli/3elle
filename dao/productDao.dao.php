<?php


/**
 * Interface ProductDao
 */
interface ProductDao
{

    /**
     * @param int $id
     * @return Product|null
     */
    function findById(int $id): ?Product;

    /**
     * @param float $vat
     * @return iterable|null
     */
    function findByVat(float $vat): ?iterable;

    /**
     * @param float $price
     * @return iterable|null
     */
    function findByPriceExVat(float $price): ?iterable;

    /**
     * @param string $mark
     * @return iterable|null
     */
    function findByMark(string $mark): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoProduct(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllOption(int $id):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllOrder(int $id):?iterable;
    /**
     * @return iterable|null
     */
    function findAllInfo(): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Product $product
     * @return int last inserted id
     */
    function save(Product $product): int;

    /**
     * @param Product $product
     */
    function update(Product $product): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}