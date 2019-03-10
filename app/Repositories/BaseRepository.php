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
     * @var Model
     */
    private $model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass();

    /**
     * @return Model
     */
    protected function startConditions(): Model
    {
        return clone $this->model;
    }
}
