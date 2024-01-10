

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Room') }}
        </h2>
    </x-slot>



    <div class="pt-10 pb-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-orange-400 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    {{ __("You're logged in! ,Please Select Room") }}
                </div>
            </div>

            <div class="flex w-full flex-col">
                <div class="grid grid-cols-3 w-11/12 gap-10">
                        @foreach ($rooms as $room)
                            <div>
                                <a href="{{route('complaints.index',['room'=>$room])}}"
                                    class=" shadow-xl cursor-pointer hover:scale-110 relative isolate flex flex-col justify-end overflow-hidden rounded-2xl px-8 pb-8 pt-40 max-w-sm mx-auto mt-24">
                                    <img src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a"
                                        alt="University of Southern California" class="absolute inset-0 h-full w-full object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                                    <h3 class="z-10  mt-3 text-3xl font-bold text-white">{{$room->room_number}}</h3>
                                    <div class="z-10 gap-y-1 px-1 overflow-hidden leading-6 text-gray-300 text-md ">{{$user->name}}</div>
                                </a>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
