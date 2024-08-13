<?php
namespace App\Repositories;

use App\Interfaces\TeamInterface;
use App\Models\Team;
use Illuminate\Contracts\Pagination\Paginator;

class TeamRepository implements TeamInterface
{
    public function getAll(int $page = 10): Paginator
    {
        return Team::paginate($page);
    }
    public function getById(int $id)
    {
        $show = Team::findOrFail($id);
        return $show;
    }

    public function create( array $data)
    {
        $team =Team::create($data);
        return $team;
    }

    public function delete(int $id)
    {
       $delete = Team::destroy($id);
       return $delete;
    }
}
