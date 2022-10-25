<?php

namespace App\Services;

use App\Models\CardRateCategory;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class CardRateCategoryService
{
    use ApiResponse;

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $cardRateCategory = CardRateCategory::all();
        return response($cardRateCategory);
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
     * @param  \App\Http\Requests\StoreCardRateCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
      $cardRateCategory = CardRateCategory::create($request);
        return response($cardRateCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardRateCategory $cardRateCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cardRateCategory = CardRateCategory::findorfail($id);
        return response($cardRateCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardRateCategory $cardRateCategory
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
     * @param  \App\Models\CardRateCategory $cardRateCategory
     * @return \Illuminate\Http\Response
     */
    public function update(array $request, $id)
    {
      $cardRateCategory = CardRateCategory::findorfail($id);
      $cardRateCategory->update($request);
        return response($cardRateCategory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardRateCategory $cardRateCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cardRateCategory = CardRateCategory::findorfail($id);
      $cardRateCategory->delete();
        return response("Deleted Successfully");
    }

}