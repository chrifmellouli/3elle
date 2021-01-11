<?php


/**
 * Interface MultimediaDao
 */
interface MultimediaDao
{

    /**
     * @param int $id
     * @return Multimedia|null
     */
    function findById(int $id):?Multimedia;

    /**
     * @param string $file
     * @return iterable|null
     */
    function findByFile(string $file):?iterable;

    /**
     * @param int $id_post
     * @return iterable|null
     */
    function findByIdPost(int $id_post):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllPost(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param Multimedia $multimedia
     * @return int last inserted id
     */
    function save(Multimedia $multimedia):int;

    /**
     * @param Multimedia $multimedia
     */
    function update(Multimedia $multimedia):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
