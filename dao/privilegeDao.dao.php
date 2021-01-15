<?php


/**
 * Interface PrivilegeDao
 */
interface PrivilegeDao
{
    /**
     * @param int $id
     * @return Privilege|null
     */
    function findById(int $id): ?Privilege;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param $int
     * @return iterable|null
     */
    function findAllUserThatHavePermission($int): ?iterable;

    /**
     * @param Privilege $privilege
     * @return int last inserted id
     */
    function save(Privilege $privilege): int;

    /**
     * @param Privilege $privilege
     */
    function update(Privilege $privilege): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}
