<?php

namespace App\Interfaces;

use Illuminate\Contracts\Pagination\Paginator;

interface PostInterface
{
    public function getAll(int $page ):Paginator;
    public function getById(int $id);
    public function create(array $data);
    public function delete(int $id);
}
