

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create General Complaint') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white border border-4 rounded-lg shadow relative m-10">

                <div class="flex items-start justify-between p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold">
                        General Complaint
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                        data-modal-toggle="product-modal">

                    </button>
                </div>

                <div class="p-6 space-y-6">
                    <form action="{{ route('complaints.storeGen',["room" => $room]) }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-6 gap-6">

                            <div class="col-span-6 sm:col-span-3">
                                <label for="room" class="text-sm font-medium text-gray-900 block mb-2">Room</label>
                                <input type="text" disabled required value="{{ old('name', '') }}"
                                    name="room" id="room"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5"
                                    placeholder="{{$room->room_number}}" required="">

                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="detail" class="text-sm font-medium text-gray-900 block mb-2">Detail</label>
                                <textarea name="detail" id="detail" class="w-full border-1 outline-none rounded-md" cols="30" rows="10">{{ old('detail', '') }}</textarea>

                                @error('detail')
                                    <div class="text-red-600">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                        <div class="p-6 border-gray-200 rounded-b">
                            <button
                                class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center"
                                type="submit">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
