<?php

require "../models/authorization.model.php";

/**
 * Interface AuthorizationDao
 */
interface AuthorizationDao
{

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param Authorization $authorization
     * @return int last inserted id
     */
    function save(Authorization $authorization): int;

    /**
     * @param int $id_user
     * @param int $id_privilege
     */
    function delete(int $id_user, int $id_privilege): void;

}
