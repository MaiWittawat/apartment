@extends('layouts.main')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
    <form action="{{ route('expense.store') }}" method="post">
        @csrf
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-center">
                    <thead class="border-b">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                          Room
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                          Elec
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                            Water
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($rooms as $room)
                            <tr class="border-b bg-gray-50 border-gray-200">
                                <td class="text-sm text-gray-900 font-medium px-6 py-4 whitespace-nowrap">
                                {{$room->room_number}}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <input required type="number" id="elec_{{$room->room_number}}" name="elec_{{$room->room_number}}" autocomplete="off"
                                        placeholder="Enter new elec meter"
                                        value="{{ old('elec_' . $room->room_number, '') }}"
                                        class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('elec_' . $room->room_number) border-red-600 @enderror">
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <input required type="number" id="water_{{$room->room_number}}" name="water_{{$room->room_number}}" autocomplete="off"
                                        placeholder="Enter new water meter"
                                        value="{{ old('water_' . $room->room_number, '') }}"
                                        class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('water_' . $room->room_number) border-red-600 @enderror">
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>


        <label for="rental_period">Select Rental Period</label>
        <input required type="date" id="rental_period" name="rental_period" autocomplete="off"
                                        placeholder="Enter rental period"
                                        value="{{ old('rental_period', '') }}"
                                        class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('rental_period') border-red-600 @enderror">

        <div class="p-6 border-t border-gray-200 rounded-b">
            <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Submit</button>
        </div>
        
    </form>
</div>

@endsection