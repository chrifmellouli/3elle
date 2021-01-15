<?php


/**
 * Interface ProductFrDao
 */
interface ProductFrDao
{
    /**
     * @param int $id
     * @return ProductFr|null
     */
    function findById(int $id):?ProductFr;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoProductFr(int $id):?iterable;

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
     * @param ProductFr $productAr
     * @return int last inserted id
     */
    function save(ProductFr $productAr):int;

    /**
     * @param ProductFr $productAr
     */
    function update(ProductFr $productAr):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}