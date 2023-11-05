@extends('layouts.main')

@section('content')
    @include('alert')

    <h1>Welcome</h1>
    <h2>This is home!!</h2>
    <a href="{{ route('schedule.create') }}">Booking a Contract Signing Appointment</a>


@endsection