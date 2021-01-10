<?php


/**
 * Interface CategoryArDao
 */
interface CategoryArDao
{

    /**
     * @param int $id
     * @return CategoryAr|null
     */
    function findById(int $id):?CategoryAr;

    /**
     * @param int $id
     * @return CategoryAr|null
     */
    function findAllInfoCategoryById(int $id):?CategoryAr;

    /**
     * @param string $code
     * @return CategoryAr|null
     */
    function findByCode(string $code):?CategoryAr;

    /**
     * @param string $code
     * @return CategoryAr|null
     */
    function findAllInfoCategoryByCode(string $code):?CategoryAr;

    /**
     * @param string $designation
     * @return iterable|null
     */
    function findByDesignation(string $designation):?iterable;

    /**
     * @param int $id_category
     * @return iterable|null
     */
    function findByIdCategory(int $id_category):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param CategoryAr $categoryAr
     * @return int last inserted id
     */
    function save(CategoryAr $categoryAr):int;

    /**
     * @param CategoryAr $categoryAr
     */
    function update(CategoryAr $categoryAr):void;

}
