<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class ComplaintController extends Controller
{
    public function index() {

        $id = request('room');
        $room = Room::find($id);

        $comps = Complaint::orderBy('created_at', 'desc')->get();

        return view('complaints.index',['room'=>$room, 'complaints' => $comps]);
    }

    public function admin(){

        $rooms = Room::all();
        $complaints = Complaint::with('room')->orderBy('created_at', 'desc')->get();

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
        // dd($request->all());
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
        $comp->customer_appointment_date = $request->customer_appointment_date;
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


    public function editGen(Request $request){

        $request->validate([
            "complaint" => ['required'],
            "response" => ['required']
        ]);


        $id = request('complaint');


        $comp = Complaint::find($id);

        $comp->response = $request->response;

        $comp->response_date = now();

        $comp->save();

        return redirect()->route('complaints.admin')->with('success', 'Add Response, Successfully.');
    }


    public function editMain(Request $request){

        $request->validate([
            "complaint" => ['required'],
            "appointment_date" => ['required']
        ]);


        $id = request('complaint');
        $comp = Complaint::find($id);
        $comp->status = "SCHEDULED";
        $comp->appointment_date = $request->appointment_date;
        $comp->save();

        return redirect()->route('complaints.admin')->with('success', 'Add Response, Successfully.');
    }


    public function addImage(Request $request){
        // dd($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'coplaint' => ['required']
        ]);


        $id = request('coplaint');
        // dd($id);
        $comp = Complaint::find($id);
        // dd($comp);
        
        if($request->file('image') != null )
        {
            $imagePath = $request->file('image')->store('eventImages', 'public'); // Store image in 'public/images' folder

            $comp->img = $imagePath;
        }

        $comp->status = "FIXED";

        $comp->save();

        $room = $comp->room()->first();

        return redirect()->route('complaints.index',["room"=>$room])->with('success', 'Add Response, Successfully.');
    }

    public function endMain(Request $request){

        $request->validate([
            "complaint" => ['required'],
        ]);


        $id = request('complaint');
        $comp = Complaint::find($id);
        $comp->status = "END";
        $comp->save();

        return redirect()->route('complaints.admin')->with('success', 'End Maintenance Complaint, Successfully.');
    }
}
