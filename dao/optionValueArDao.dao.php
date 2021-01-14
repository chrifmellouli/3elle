<?php


/**
 * Interface OptionValueArDao
 */
interface OptionValueArDao
{

    /**
     * @param int $id
     * @return OptionValueAr|null
     */
    function findById(int $id):?OptionValueAr;

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
     * @param OptionValueAr $optionValueAr
     * @return int last inserted id
     */
    function save(OptionValueAr $optionValueAr):int;

    /**
     * @param OptionValueAr $optionValueAr
     */
    function update(OptionValueAr $optionValueAr):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
