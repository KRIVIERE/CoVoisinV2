<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offers;

class OffersController extends Controller
{
    public function index()
    {
        return Offers::all();
    }


    public function create(Request $request)
    {
        $offer = Offers::create($request->all());

        return response()->json($offer, 201);

    }


    public function show(Offers $offer)
    {
        return $offer;
    }

    public function update(Request $request, Offers $offer)
    {
        $offer->update($request->all());
        return response()->json($offer, 200);
    }


    public function delete(Offers $offer)
    {
        $offer->delete();

        return response()->json(null, 204);

    }
}
