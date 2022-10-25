<?php

namespace App\Http\Controllers;

use App\Models\CardRateCategory;
use App\Http\Requests\StoreCardRateCategoryRequest;
use App\Http\Requests\UpdateCardRateCategoryRequest;
use App\Services\CardRateCategoryService;

class CardRateCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return app(CardRateCategoryService::class)->index();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCardRateCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRateCategoryRequest $request)
    {
        return app(CardRateCategoryService::class)->store($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardRateCategory  $cardRateCategory
     * @return \Illuminate\Http\Response
     */
    public function show(CardRateCategory $cardRateCategory, $id)
    {
        return app(CardRateCategoryService::class)->show($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardRateCategory  $cardRateCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(CardRateCategory $cardRateCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRateCategoryRequest  $request
     * @param  \App\Models\CardRateCategory  $cardRateCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRateCategoryRequest $request, CardRateCategory $cardRateCategory, $id)
    {
        return app(CardRateCategoryService::class)->update($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardRateCategory  $cardRateCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardRateCategory $cardRateCategory, $id)
    {
        return app(CardRateCategoryService::class)->destroy($id);

    }
}