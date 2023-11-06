@extends('layouts.main')

@section('content')

<div>
    <form action="{{ route('schedule.store') }}" method="post">
        @csrf
        <div class="grid grid-cols-6 gap-6">

            <div class="col-span-6">
                <label for="name" class="text-sm font-medium text-gray-900 block mb-2">Enter your name</label>
                @error('name')
                <div class="text-red-600">
                    {{ $message }}
                </div>
                @enderror
                <input required type="text" id="name" name="name" autocomplete="off"
                       placeholder="Put in your name"
                       value="{{ old('name', '') }}"
                class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('name') border-red-600 @enderror">
            </div>
            <div class="col-span-6 ">
                <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Enter your email</label>
                @error('email')
                <div class="text-red-600">
                    {{ $message }}
                </div>
                @enderror
                <input required type="email" id="email" name="email" autocomplete="off"
                       placeholder="Put in your email"
                       value="{{ old('email', '') }}"
                class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('email') border-red-600 @enderror">
            </div>
            <div class="col-span-6 ">
                <label for="appointment_date" class="text-sm font-medium text-gray-900 block mb-2">Enter your appointment date</label>
                @error('appointment_date')
                <div class="text-red-600">
                    {{ $message }}
                </div>
                @enderror
                <input required type="date" id="appointment_date" name="appointment_date" autocomplete="off"
                       placeholder="Put in your appointment date"
                       value="{{ old('appointment_date', '') }}"
                class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('appointment_date') border-red-600 @enderror">
            </div>
            <div class="col-span-6">
                <label for="phone_number" class="text-sm font-medium text-gray-900 block mb-2">Enter your phone number</label>
                @error('phone_number')
                <div class="text-red-600">
                    {{ $message }}
                </div>
                @enderror
                <input required type="string" id="phone_number" name="phone_number" autocomplete="off"
                       placeholder="Put in your phone number"
                       value="{{ old('phone_number', '') }}"
                class="border border-gray-300 shadow mb-4 px-5 pb-2.5 w-2/3 rounded-lg @error('phone_number') border-red-600 @enderror">
            </div>
            <div class="p-6 border-t border-gray-200 rounded-b">
                <button class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="submit">Submit</button>
            </div>

        </div>
    </form>
</div>

@endsection
