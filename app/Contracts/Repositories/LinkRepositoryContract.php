<?php
declare(strict_types=1);

namespace App\Contracts\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface LinkRepositoryContract
 * @package App\Contracts\Repositories
 */
interface LinkRepositoryContract
{
    /**
     * Save a new model and return the instance
     *
     * @param array $fields
     * @return Model
     */
    public function create(array $fields): Model;

    /**
     * Find a model by its primary key
     *
     * @param int $id
     * @return Model|null
     */
    public function findById(int $id): ?Model;

    /**
     * Get the first record matching the attributes or create it
     *
     * @param array $params
     * @return Model
     */
    public function firstOrCreate(array $params): Model;
}
