<?php


/**
 * Interface CategoryDao
 */
interface CategoryDao
{
    /**
     * @param int $id
     * @return Category|null
     */
    function findById(int $id):?Category;

    /**
     * @param string $code
     * @return Category|null
     */
    function findByCode(string $code):?Category;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllProduct(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Category $category
     * @return int last inserted id
     */
    function save(Category $category):int;

    /**
     * @param Category $category
     */
    function update(Category $category):void;

}
