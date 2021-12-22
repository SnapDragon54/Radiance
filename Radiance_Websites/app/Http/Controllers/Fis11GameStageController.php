<?php

namespace App\Http\Controllers;

use App\Models\Fis11GameStage;
use App\Http\Requests\StoreFis11GameStageRequest;
use App\Http\Requests\UpdateFis11GameStageRequest;
use App\Models\Fis11GameLevel;

class Fis11GameStageController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('contents.modes.inStoryMode');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StoreFis11GameStageRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreFis11GameStageRequest $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Fis11GameStage  $fis11GameStage
	 * @return \Illuminate\Http\Response
	 */
	public function show($stage)
	{
		$title = 'Stage ' . $stage;
		$stageData = Fis11GameStage::getStage($stage);
		$levels = $stageData->gameLevels;

		return view('contents.stages.stage' . strval($stage), compact('title', 'stage', 'levels'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Fis11GameStage  $fis11GameStage
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Fis11GameStage $fis11GameStage)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdateFis11GameStageRequest  $request
	 * @param  \App\Models\Fis11GameStage  $fis11GameStage
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateFis11GameStageRequest $request, Fis11GameStage $fis11GameStage)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Fis11GameStage  $fis11GameStage
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Fis11GameStage $fis11GameStage)
	{
		//
	}
}
