<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contract;

class ContractController extends Controller
{
    public function create(){

        $users = User::where('role', 'USER')->get();

        return view('contract.create',["users" => $users]);
    }

    public function store(Request $request){

        $request->validate([
            'room_number' => ['required', 'integer'],
        ]);

        $room = Room::where('room_number', $request->room_number)->first();

        dd($room);

        $user = json_decode($request->input('user'));


        $contract = new Contract();
        $contract->room_id = $room->id;
        $contract->user_id = $user->id;
        $contract->status = true;
        $contract->security_deposit = $room->price*3;

        $contract->save();


        return redirect('contract.create');
    }
}
