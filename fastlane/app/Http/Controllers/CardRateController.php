<?php

namespace App\Http\Controllers;

use App\Models\CardRate;
use App\Http\Requests\StoreCardRateRequest;
use App\Http\Requests\UpdateCardRateRequest;
use App\Services\CardRateService;

class CardRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app(CardRateService::class)->index();

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
     * @param  \App\Http\Requests\StoreCardRateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRateRequest $request)
    {
        return app(CardRateService::class)->store($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardRate  $cardRate
     * @return \Illuminate\Http\Response
     */
    public function show(CardRate $cardRate, $id)
    {
        return app(CardRateService::class)->show($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardRate  $cardRate
     * @return \Illuminate\Http\Response
     */
    public function edit(CardRate $cardRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRateRequest  $request
     * @param  \App\Models\CardRate  $cardRate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRateRequest $request, CardRate $cardRate,$id)
    {
        return app(CardRateService::class)->update($request->all(), $id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardRate  $cardRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardRate $cardRate, $id)
    {
        return app(CardRateService::class)->destroy($id);

    }
}