<?php


/**
 * Interface PostObservableDao
 */
interface PostObservableDao
{
    /**
     * @param int $id
     * @return PostObservable|null
     */
    function findById(int $id): ?PostObservable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findByIdObservable(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findByIdPost(int $id): ?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoPostObservable(int $id): ?iterable;

    /**
     * @return iterable|null
     */
    function findAllInfo(): ?iterable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param PostObservable $postObservable
     * @return int last inserted id
     */
    function save(PostObservable $postObservable): int;

    /**
     * @param PostObservable $postObservable
     */
    function update(PostObservable $postObservable): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}