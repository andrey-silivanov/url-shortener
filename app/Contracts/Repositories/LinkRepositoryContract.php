<?php
declare(strict_types=1);

namespace App\Contracts\Repositories;

interface LinkRepositoryContract
{
    public function create(array $fields);

    public function findById(int $id);

    public function firstOrCreate(array $params);
}
