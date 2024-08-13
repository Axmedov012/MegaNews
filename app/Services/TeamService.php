<?php

namespace App\Services;

use App\Repositories\TeamRepository;
use Illuminate\Support\Facades\Storage;

class TeamService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected TeamRepository $teamRepository)
    {

    }

}
