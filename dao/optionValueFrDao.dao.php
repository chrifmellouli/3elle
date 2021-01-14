<?php


/**
 * Interface OptionValueFrDao
 */
interface OptionValueFrDao
{

    /**
     * @param int $id
     * @return OptionValueFr|null
     */
    function findById(int $id):?OptionValueFr;

    /**
     * @param string $value
     * @return iterable|null
     */
    function findByValue(string $value):?iterable;

    /**
     * @param int $id_option_value
     * @return iterable|null
     */
    function findByIdOptionValue(int $id_option_value):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoOptionValueFr(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAllInfo():?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param OptionValueAr $optionValueFr
     * @return int last inserted id
     */
    function save(OptionValueAr $optionValueFr):int;

    /**
     * @param OptionValueAr $optionValueFr
     */
    function update(OptionValueAr $optionValueFr):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}