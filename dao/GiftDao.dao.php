<?php


/**
 * Interface GiftDao
 */
interface GiftDao
{

    /**
     * @param int $id
     * @return Gift|null
     */
    function findById(int $id):?Gift;

    /**
     * @param int $id_act_promotion
     * @return iterable|null
     */
    function findByIdActPromotion(int $id_act_promotion):?iterable;

    /**
     * @param int $id
     * @return mixed
     */
    function findAllActPromotion(int $id);

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Gift $gift
     * @return int last inserted id
     */
    function save(Gift $gift):int;

    /**
     * @param Gift $gift
     */
    function update(Gift $gift):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}