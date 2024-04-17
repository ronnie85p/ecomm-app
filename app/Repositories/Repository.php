<?php

namespace App\Repositories;

use App\Models\Dashboard\Category;
use App\Models\User;
use App\Interfaces\RepositoryInterface;
use Illuminate\Support\Arr;
use Exception;

class Repository implements RepositoryInterface
{
    public $searchQuery = [
        'offset' => 0,
        'limit' => 15,
        'sort_by' => 'id',
        'sort_dir' => 'asc'
    ];

    /**
     * Model::class
     */
    public $model = \App\Models\Dashboard\Category::class;

    /**
     * @var array
     */
    public $filters = [];

    /**
     * @return mixed
     */
    public function findAll()
    {
        return $this->model::all();
    }

    /**
     * @param string $column
     * @param $value
     * @return mixed
     */
    public function findBy(string $column, $value)
    {
        return $this->model::where($column, $value);
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model::create($data)->fresh();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function insert(array $data)
    {
        return $this->model::insert($data);
    }

    /**
     * @param int $id
     * @param array $data
     * @return mixed
     */
    public function update(int $id, array $data)
    {
        $item = $this->findById($id);
        $item->fill($data);
        $item->save();
        return $item->fresh();
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->model::find($id);
    }

    /**
     * @param int $id
     * @return mixed|void
     */
    public function delete(int $id)
    {
        $this->model::destroy($id);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function restore(int $id)
    {
        $object = $this->findByIdWithTrashed($id);
        if ($object && method_exists($this->model, 'isSoftDelete')) {
            $object->restore($id);
            return $object;
        }
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findByIdWithTrashed(int $id)
    {
        if (method_exists($this->model, 'isSoftDelete')) {
            return $this->model::withTrashed()->find($id);
        }
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function search(array $data)
    {
        // $query = $this->model::filterBy($data['fltr']);

        $sortBy = Arr::get($data, 'sort_by') ?? $this->searchQuery['sort_by'];
        $sortDir = Arr::get($data, 'sort') ?? $this->searchQuery['sort_dir'];
        $offset = Arr::get($data, 'offset') ?? $this->searchQuery['offset'];
        $limit = Arr::get($data, 'limit') ?? $this->searchQuery['limit'];

        $query = $this->model::orderBy($sortBy, $sortDir);
        // $query->offset($offset);
        // $query->limit($limit);

        if (Arr::has($data, 'list') && (bool)Arr::get($data, 'list') === true) {
            return $query->get();
        }

        return $query->paginate(Arr::get($data, 'page') ?? (new $this->model)->getPerPage());
    }
    
}