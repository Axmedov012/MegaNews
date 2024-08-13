<?php

namespace App\Http\Controllers;

use App\Http\Resources\TeamResource;
use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Repositories\TeamRepository;
use App\Services\TeamService;
use App\Trait\Post\TeamTrait;

class TeamController extends Controller
{
    use TeamTrait;
    public function __construct(protected TeamRepository $teamRepository) {}

    public function index()
    {
        $teams =  $this->teamRepository->getAll();
        return $teams;
    }

    public function store(StoreTeamRequest $request)
    {
      $data =  $request->validated();
        if ($request->hasFile('photo')){
           $photo= $request->file('photo');
           $filePath = $this->teamRepository->fileStore($photo);
        }
        $team = $this->teamRepository->create([
            'name' => $data['name'],
            'job' => $data['job'],
            'photo' => $filePath,
        ]);
        return $this->success(new TeamResource($team),'team muvaffaqiyatlo qo\'shildi');
    }
    public function show(Team $team)
    {
        //
    }
    public function destroy( $id)
    {
        $data = $this->teamRepository->delete($id);
        return $this->delete('Team o\'chirildi');
    }
}
