<?php


/**
 * Interface CustomerObserverDao
 */
interface CustomerObserverDao
{
    /**
     * @param int $id
     * @return CustomerObservable|null
     */
    function findById(int $id):?CustomerObservable;

    /**
     * @param int $id_observable
     * @return iterable|null
     */
    function findByIdObservable(int $id_observable):?iterable;

    /**
     * @param int $id_customer
     * @return iterable|null
     */
    function findByIdCustomer(int $id_customer):?iterable;

    /**
     * @param int $id
     * @return iterable|null
     */
    function findAllInfoCustomerObservable(int $id):?iterable;

    /**
     * @return iterable|null
     */
    function findAll():?iterable;

    /**
     * @param CustomerObservable $customerObservable
     * @return int last inserted id
     */
    function save(CustomerObservable $customerObservable):int;

    /**
     * @param CustomerObservable $customerObservable
     */
    function update(CustomerObservable $customerObservable):void;

    /**
     * @param int $id
     */
    function delete(int $id):void;

}
