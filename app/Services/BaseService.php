<?php

namespace App\Services;

use App\Exceptions\GeneralDestroyException;
use App\Exceptions\GeneralIndexException;
use App\Exceptions\GeneralNotFoundException;
use App\Exceptions\GeneralSearchException;
use App\Exceptions\GeneralStoreException;
use App\Exceptions\GeneralUpdateException;
use App\Repositories\Repository;
use App\Interfaces\ServiceInterface;

use Exception;

class BaseService 
{
    public $model;

    /**
     * @param Repository $repository
     */
    public function __construct(
        private Repository $repository
    ) { 
        $this->repository->model = $this->model;
    }

    /**
     * @param int $id
     * @return mixed
     * @throws GeneralNotFoundException
     */
    public function getById(int $id)
    {
        try {
            if (! $object = $this->repository->findById($id)) {
                throw new Exception();
            }

            return $object;
        } catch (Exception $exception) {
            throw new GeneralNotFoundException($exception);
        }
    }

    /**
     * @return mixed
     * @throws GeneralIndexException
     */
    public function getAll()
    {
        try {
            return $this->repository->findAll();
        } catch (Exception $exception) {
            throw new GeneralIndexException($exception);
        }
    }

    /**
     * @param array $data
     * @return mixed
     * @throws GeneralStoreException
     */
    public function create(array $data)
    {
        try {
            return $this->repository->create($data);
        } catch (Exception $exception) {
            throw new GeneralStoreException($exception);
        }
    }

    /**
     * @param array $data
     * @return mixed
     * @throws GeneralUpdateException
     */
    public function update(string $id, array $data)
    {
        try {
            return $this->repository->update($id, $data);
        } catch (Exception $exception) {
            throw new GeneralUpdateException($exception);
        }
    }

    /**
     * @param int $id
     * @return mixed|void
     * @throws GeneralDestroyException
     */
    public function delete(int $id)
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception $exception) {
            throw new GeneralDestroyException($exception);
        }
    }

    /**
     * @param array $data
     * @return mixed|void
     * @throws GeneralSearchException
     */
    public function search(array $data)
    {
        try {
            return $this->repository->search($data);
        } catch (Exception $exception) {
            throw new GeneralSearchException($exception);
        }
    }
}