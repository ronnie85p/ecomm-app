<?php

namespace App\Interfaces;

interface ServiceInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function getById(int $id);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @return mixed
     */
    public function update(string $id, array $data);

    /**
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id);

    /**
     * @param array $data
     * @return mixed|void
     */
    public function search(array $data);
}