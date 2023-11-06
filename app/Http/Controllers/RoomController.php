<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $user)
    {

        if($user == null){
            return redirect();
        }
        
        $contracts = Contract::where('user_id', $user->id)->get();

        $rooms = Room::where('room_id', $contracts->room_id);

        return view('room.index',['rooms' => $rooms]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
