<?php


/**
 * Interface AuthorizationDao
 */
interface AuthorizationDao
{
    /**
     * @param int $id_user
     * @param int $id_privilege
     * @return Authorization|null
     */
    function findById(int $id_user, int $id_privilege): ?Authorization;

    /**
     * @param int $id_user
     * @return iterable|null
     */
    function findByIdUser(int $id_user): ?iterable;

    /**
     * @param int $id_privilege
     * @return iterable|null
     */
    function findByIdPrivilege(int $id_privilege): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllUser(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllPrivilege(int $id): ?iterable;

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
     * @param Authorization $authorization
     */
    function update(Authorization $authorization): void;

}
