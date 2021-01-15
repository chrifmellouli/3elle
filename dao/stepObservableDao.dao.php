<?php


/**
 * Interface StepObservableDao
 */
interface StepObservableDao
{
    /**
     * @param int $id
     * @return StepObsevable|null
     */
    function findById(int $id): ?StepObsevable;

    /**
     * @return iterable|null
     */
    function findAll(): ?iterable;

    /**
     * @param StepObsevable $stepObservable
     * @return int last inserted id
     */
    function save(StepObsevable $stepObservable): int;

    /**
     * @param StepObsevable $stepObservable
     */
    function update(StepObsevable $stepObservable): void;

    /**
     * @param int $id
     */
    function delete(int $id): void;
}