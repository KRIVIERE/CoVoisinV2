<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Users::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
/*    public function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => $data['password'],
            'email' => $data['email'],
            'lastName' => $data['lastName'],
            'firstName' => $data['firstName'],
            'phoneNumber' => $data['phoneNumber'],
            'address' => $data['address'],
        ]);
    }*/

    public function create(Request $request)
    {
        $user = Users::create($request->all());

        return response()->json($user, 201);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Users $user)
    {
        $user->update($request->all());
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(User $user)
    {
        $user->delete();

        return response()->json(null, 204);

    }
}
