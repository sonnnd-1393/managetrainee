<?php

namespace App\Repo;

use Illuminate\Support\Collection;

interface HomeRepositoryInterface
{
    public function paginateList($page = null, array $columns = ['*'], $keyword = '', array $status = []);

    public function insertGetId(array $data);

    public function update($id, $data);
}
