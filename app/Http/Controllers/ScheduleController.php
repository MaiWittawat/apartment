<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index() {
        $schedules = Schedule::get();
        return view('schedule.index', [
            'schedules' => $schedules
        ]);
    }

    public function create() {
        return view('schedule.create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'appointment_date' => ['required', 'date', 'after_or_equal:today'],
            'appointment_date.after_or_equal' => 'The appointment date must be today or a future date.',
            'phone_number' => ['required','regex:/^0[0-9]{8,9}$/']
        ]);

        $schedule = new Schedule();
        $schedule->name = $request->get('name');
        $schedule->email = $request->get('email');
        $schedule->appointment_date = $request->get('appointment_date');
        $schedule->phone_number = $request->get('phone_number');
        $schedule->save();

        return redirect()->route('home')->with('success', 'Create appointment successfully, Please wait for the owner to contact back.');
    }

    public function accept(Request $request, Schedule $schedule) {
        $schedule->status = 'ACCEPT';
        $schedule->save();

        return redirect()->route('schedule.index')->with('success', 'Change appointment status to ACCEPT, Successfully.');
    }

    public function cancel(Schedule $schedule) {
        $schedule->status = 'CANCEL';
        $schedule->save();
        return redirect()->route('schedule.index')->with('success', 'Change appointment status to Cancel, Successfully.');

    }
}
