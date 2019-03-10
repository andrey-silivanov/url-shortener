<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Contracts\Repositories\LinkRepositoryContract;
use App\Models\Link as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * Class LinkRepository
 * @package App\Repositories
 */
class LinkRepository extends BaseRepository implements LinkRepositoryContract
{
    /**
     * Return model name
     *
     * @return mixed|string
     */
    protected function getModelClass(): string
    {
        return Model::class;
    }

    /**
     * Save a new model and return the instance
     *
     * @param array $fields
     * @return EloquentModel
     */
    public function create(array $fields): EloquentModel
    {
        return $this->startConditions()->create($fields);
    }

    /**
     * Find a model by its primary key
     *
     * @param int $id
     * @return EloquentModel
     */
    public function findById(int $id): ?EloquentModel
    {
        return $this->startConditions()->find($id);
    }

    /**
     * Get the first record matching the attributes or create it
     *
     * @param array $params
     * @return EloquentModel
     */
    public function firstOrCreate(array $params): EloquentModel
    {
        return $this->startConditions()->firstOrCreate($params);
    }
}
