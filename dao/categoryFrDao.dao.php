<?php


/**
 * Interface CategoryFrDao
 */
interface CategoryFrDao
{

    /**
     * @param int $id
     * @return CategoryFr|null
     */
    function findById(int $id):?CategoryFr;

    /**
     * @param int $id
     * @return CategoryFr|null
     */
    function findAllInfoCategoryById(int $id):?CategoryFr;

    /**
     * @param string $code
     * @return CategoryFr|null
     */
    function findByCode(string $code):?CategoryFr;

    /**
     * @param string $code
     * @return CategoryFr|null
     */
    function findAllInfoCategoryByCode(string $code):?iterable;

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
     * @return int
     */
    function save(CategoryAr $categoryAr):int;

    /**
     * @param CategoryAr $categoryAr
     */
    function update(CategoryAr $categoryAr):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;
}
