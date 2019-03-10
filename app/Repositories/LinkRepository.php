<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\Repositories\LinkRepositoryContract,
    App\Models\Link as Model;

/**
 * Class LinkRepository
 * @package App\Repositories
 */
class LinkRepository extends BaseRepository implements LinkRepositoryContract
{
    /**
     * @return mixed|string
     */
    protected function getModelClass()
    {
        return Model::class;
    }

    /**
     * @param array $fields
     * @return mixed
     */
    public function create(array $fields)
    {
        return $this->startConditions()->create($fields);
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function findById(int $id)
    {
        return $this->startConditions()->find($id);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function firstOrCreate(array $params)
    {
        return $this->startConditions()->firstOrCreate($params);
    }
}
