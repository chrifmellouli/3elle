<?php


/**
 * Interface ProductArDao
 */
interface ProductArDao
{
    /**
     * @param int $id
     * @return ProductAr|null
     */
    function findById(int $id):?ProductAr;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoProductAr(int $id):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfo(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param ProductAr $productAr
     * @return int last inserted id
     */
    function save(ProductAr $productAr):int;

    /**
     * @param ProductAr $productAr
     */
    function update(ProductAr $productAr):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}