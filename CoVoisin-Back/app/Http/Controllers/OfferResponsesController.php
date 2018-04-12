<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferResponses;

class OfferResponsesController extends Controller
{
    public function index()
    {
        return OfferResponses::all();
    }


    public function create(Request $request)
    {
        $offerResponse = OfferResponses::create($request->all());

        return response()->json($offerResponse, 201);

    }


    public function show(OfferResponses $offerResponse)
    {
        return $offerResponse;
    }

    public function update(Request $request, OfferResponses $offerResponse)
    {
        $offerResponse->update($request->all());
        return response()->json($offerResponse, 200);
    }


    public function delete(OfferResponses $offerResponse)
    {
        $offerResponse->delete();

        return response()->json(null, 204);
    }
}
