<?php


/**
 * Interface PostDao
 */
interface PostDao
{

    /**
     * @param int $id
     * @return Post|null
     */
    function findById(int $id):?Post;

    /**
     * @param string $code
     * @return Post|null
     */
    function findByCode(string $code):?Post;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllMulimediaById(int $id):?iterable;

    /**
     * @param string $code
     * @return iterable|null
     */
    function findAllMulimediaByCode(string $code):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllProductById(int $id):?iterable;

    /**
     * @param string $code
     * @return iterable|null
     */
    function findAllProductByCode(string $code):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllPromotionById(int $id):?iterable;

    /**
     * @param string $code
     * @return iterable|null
     */
    function findAllPromotionByCode(string $code):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllProductPromotedById(int $id):?iterable;

    /**
     * @param string $code
     * @return iterable|null
     */
    function findAllProductPromotedByCode(string $code):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllProductGiftById(int $id):?iterable;

    /**
     * @param string $code
     * @return iterable|null
     */
    function findAllProductGiftByCode(string $code):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Post $post
     * @return int last inserted id
     */
    function save(Post $post):int;

    /**
     * @param Post $post
     */
    function update(Post $post):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
