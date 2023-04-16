<?php

namespace App\Http\Controllers;

use App\Models\Teams;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournament = Tournament::all()->last();
        return view('tournament.table', ['tournament' => $tournament]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('tournament.create', ['amountTeams' => $request['amountTeams']]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $tournament = new Tournament();
        $tournament->teams = $request['amountTeams'];
        $tournament->save();
        for ($x = 0; $x <= $request['amountTeams']-1; $x++)
        {
            $teams = new Teams();
            $teams->tournament_id = $tournament->id;
            $teams->team_name = $request['teamName'.$x];
            $teams->save();

        }
        return redirect()->route('tournament.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
