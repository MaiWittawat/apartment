<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintController extends Controller
{
    public function index() {

        $id = request('room');
        $room = Room::find($id);

        $comps = Complaint::get();

        return view('complaints.index',['room'=>$room, 'complaints' => $comps]);
    }

    public function admin(){

        $rooms = Room::all();
        $complaints = Complaint::with('room')->get();

        return view('complaints.admin', [
            "rooms" => $rooms,
            "complaints" => $complaints,
        ]);

    }

    public function show() {

        $id = request('room');

        $comp_id = request('complaint');

        $room = Room::find($id);

        $comp = Complaint::find($comp_id);

        $user = Auth::user();

        return view('complaints.show',['room'=>$room, "complaint"=> $comp, "user"=> $user]);
    }

    public function general() {
        $id = request('room');
        $room = Room::find($id);

        return view('complaints.createGeneral',["room"=>$room]);
    }

    public function maintenance() {
        $id = request('room');
        $room = Room::find($id);

        return view('complaints.createMaintenance',['room'=>$room]);
    }

    public function storeMain(Request $request) {

        $id = request('room');
        $room = Room::find($id);

        $request->validate([
            "room" => ['required'],
            "detail" => ['required']
        ]);

        $comp = new Complaint();
        $comp->room_id = $room->id;
        $comp->detail = $request->detail;
        $comp->type = "MAINTENANCE";
        $comp->status = "PENDING";
        $comp->save();

        return redirect()->route('complaints.index',["room"=>$room])->with('success', 'Add Complaint, Successfully.');
    }


    public function storeGen(Request $request) {
        $request->validate([
            "room" => ['required'],
            "detail" => ['required']
        ]);

        $id = request('room');
        $room = Room::find($id);

        $comp = new Complaint();
        $comp->room_id = $room->id;
        $comp->detail = $request->detail;
        $comp->type = "GENERAL";
        $comp->save();

        return redirect()->route('complaints.index',["room"=>$room])->with('success', 'Add Complaint, Successfully.');
    }

}
