<?php

namespace App\Services;

use App\Models\CardRate;
use App\Traits\ApiResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class CardRateService
{
    use ApiResponse;

   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $cardRate = CardRate::all();
        return response($cardRate);
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
    public function store($request)
    {
      $cardRate = CardRate::create($request);
        return response($cardRate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CardRate $cardRate
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $cardRate = CardRate::findorfail($id);
        return response($cardRate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CardRate $cardRate
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
     * @param  \App\Models\CardRate $cardRate
     * @return \Illuminate\Http\Response
     */
    public function update(array $request, $id)
    {
      $cardRate = CardRate::findorfail($id);
      $cardRate->update($request);
        return response($cardRate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CardRate $cardRate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cardRate = CardRate::findorfail($id);
      $cardRate->delete();
        return response("Deleted Successfully");
    }

}