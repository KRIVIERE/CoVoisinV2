<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RequestResponses;


class RequestResponsesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RequestResponses::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $requestResponses = RequestResponses::create($request->all());

        return response()->json($requestResponses, 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(RequestResponses $requestResponses)
    {
        return $requestResponses;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RequestResponses $requestResponses)
    {
        $requestResponses->update($request->all());
        return response()->json($requestResponses, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(RequestResponses $requestResponses)
    {
        $requestResponses->delete();

        return response()->json(null, 204);
    }
}
