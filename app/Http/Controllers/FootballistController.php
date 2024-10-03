<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Footballist\StoreRequest;
use App\Http\Requests\Footballist\UpdateRequest;
use App\Models\Footballist;
use App\Models\Country;
use App\Models\Team;
use App\Models\Gender;
use Illuminate\Http\Request;

class FootballistController extends Controller
{
  public function index()
  {
    $footballists = Footballist::all();
    return view('footballist.index', compact('footballists'));
  }

  public function create()
  {
    $countries = Country::all();
    $teams = Team::all();
    $genders = Gender::all();
    return view('footballist.create', compact('countries', 'teams', 'genders'));
  }

  public function store(StoreRequest $request)
  {
    $data = $request->validated();

    if ($data['team']) {
      $team = Team::firstOrCreate(['title' => $data['team']]);
    }
    unset($data['team']);
    $footballist = Footballist::firstOrCreate($data);
    $footballist->team_id = $team->id;
    $footballist->save();
    return redirect()->route('footballist.index');
  }

  public function edit(Footballist $footballist)
  {
    $countries = Country::all();
    $teams = Team::all();
    $genders = Gender::all();

    return view('footballist.edit', compact('footballist', 'countries', 'teams', 'genders'));
  }

  public function show(Footballist $footballist)
  {
    return view('footballist.show', compact('footballist'));
  }

  public function update(UpdateRequest $request, Footballist $footballist)
  {
    $data = $request->validated();
    if ($data['team']) {
      $team = Team::firstOrCreate(['title' => $data['team']]);
    }
    unset($data['team']);
    $footballist->update($data);
    $footballist->team_id = $team->id;
    $footballist->save();

    $footballists = Footballist::all();
    return view('footballist.index', compact('footballists'));
  }

  public function delete(Footballist $footballist)
  {
    $footballist->delete();

    return redirect()->route('footballist.index');
  }
}
