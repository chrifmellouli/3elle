<?php


/**
 * Interface FreeDelivery
 */
interface FreeDelivery
{

    /**
     * @param int $id
     * @return FreeDelivery|null
     */
    function findById(int $id):?FreeDelivery;

    /**
     * @param int $id_promoted_act
     * @return iterable|null
     */
    function findByIdPromotionAct(int $id_promoted_act):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function FindAllPromotionAct(int $id):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAll(int $id):?iterable;

    /**
     * @param FreeDelivery $freeDelivery
     * @return int last inserted id
     */
    function save(FreeDelivery $freeDelivery):int;

    /**
     * @param FreeDelivery $freeDelivery
     */
    function update(FreeDelivery $freeDelivery):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}