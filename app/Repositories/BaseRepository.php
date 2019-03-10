<?php
declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository
{
    /**
     * Model name
     * @var Model
     */
    private $model;

    /**
     * BaseRepository constructor
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * Return name model
     *
     * @return string
     */
    abstract protected function getModelClass(): string;

    /**
     * @return Model
     */
    protected function startConditions(): Model
    {
        return clone $this->model;
    }
}
