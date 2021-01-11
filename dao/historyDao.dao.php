<?php


/**
 * Interface HistoryDao
 */
interface HistoryDao
{
    /**
     * @param int $id
     * @return History|null
     */
    function findById(int $id): ?History;

    /**
     * @param DateTime $dateTime
     * @return iterable|null
     */
    function findBydate(DateTime $dateTime): ?iterable;

    /**
     * @param int $id_user
     * @return iterable|null
     */
    function findByIdUser(int $id_user): ?iterable;

    /**
     * @param int $id_observable
     * @return iterable|null
     */
    function findByIdObserver(int $id_observable): ?iterable;

    /**
     * @param bool $read
     * @return iterable|null
     */
    function findByRead(bool $read): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllUser(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllObservable(int $id): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param History $history
     * @return int
     */
    function save(History $history): int;

    /**
     * @param History $history
     */
    function update(History $history): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;

}
