<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('backend.profile');   
    }

    /**
     * Display the specified resource.
     *
     * @param  integer  $userId
     * @return \Illuminate\Http\Response
     */
    public function show($userId)
    {
        $user = User::find($userId);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  integer  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $this->validate(
                $request,
                [
                    'name' => 'required'
                ],
                [
                    'name.required' => 'Name required !'
                ]
            );
        }

        $user = User::find($id);
        $user->update($request->all());
        $user->save();

        return response()->json(['Updated !']);
    }
}
