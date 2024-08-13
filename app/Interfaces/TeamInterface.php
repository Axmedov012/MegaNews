<?php

namespace App\Interfaces;

use App\Models\Team;
use Illuminate\Contracts\Pagination\Paginator;

interface TeamInterface
{
   public function getAll(int $page):Paginator;
   public function getById( int $id);
   public function create(array $data);
   public function delete (int $id, );

}
