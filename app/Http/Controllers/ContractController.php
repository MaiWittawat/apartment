<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contract;

class ContractController extends Controller
{
    public function create(){

        $users = User::with('contracts.room')->where('role', 'USER')->get();

        return view('contract.create',["users" => $users]);
    }


    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'room_number' => ['required', 'integer'],
        ]);

        $users = User::where('role', 'USER')->get();

        $room = Room::where('room_number', $request->room_number)->first();

        if($room == null){
            return redirect()->route('contract.create',["users" => $users])->with('fail', "Room not found, Fail.");
        }

        $extRoom = Contract::where('room_id', $room->id)->first();


        if($extRoom != null){
            if($extRoom->status){
                return redirect()->route('contract.create',["users" => $users])->with('fail', "This room has still rent, Fail.");
            }
        }

        $user = json_decode($request->input('user'));


        $contract = new Contract();
        $contract->room_id = $room->id;
        $contract->user_id = $user->id;
        $contract->status = true;
        $contract->security_deposit = $room->price*3;

        $contract->save();

        return redirect()->route('contract.create',["users" => $users])->with('success', "add {$user->name} to {$room->room_number}, Successfully.");
    }
}
