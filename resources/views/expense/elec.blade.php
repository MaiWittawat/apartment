@extends('layouts.main')

@section('content')

<div>
    <form action="{{ route('expense.elec_store') }}" method="post">
        @csrf
        @foreach ($rooms as $room)
            
        <div class="flex">
            <label for="{{ $room->room_number }}" class="text-xl font-medium text-gray-900 block my-2">{{ $room->room_number }}</label>
            <input required type="number" id="{{ $room->room_number }}" name="{{ $room->room_number }}" autocomplete="off"
                    placeholder="Enter this month electric unit"
            class="border border-gray-300 shadow my-2 ml-2 px-5 w-1/3 rounded-lg @error('{{ $room->room_number }}') border-red-600 @enderror">
        </div>        
        @endforeach
        <div class="p-6 border-t border-gray-200 rounded-b">
            <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Submit</button>
        </div>
        
    </form>
</div>

@endsection