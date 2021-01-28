<?php

require "../models/privilege.model.php";

/**
 * Interface PrivilegeDao
 */
interface PrivilegeDao
{

    /**
     * @param int $id
     * @return Privilege|null
     */
    public function findById(int $id): ?Privilege;

    /**
     * @return iterable|null
     */
    public function findAll(): ?iterable;

}
